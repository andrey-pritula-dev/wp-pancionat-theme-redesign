# ===========================
# WordPress Docker Makefile
# ===========================

COMPOSER_SERVICE = composer
THEME = pancionat-theme
THEME_PATH = /app/themes/$(THEME)


# ---------------------------
# Composer install (если vendor отсутствует)
# ---------------------------

composer-install:
	docker compose run --rm $(COMPOSER_SERVICE) bash -c "\
		cd $(THEME_PATH) && \
		if [ ! -d vendor ]; then \
			composer install; \
		else \
			echo 'Vendor already exists - skipping'; \
		fi"

# ---------------------------
# Install a new Composer dependency inside Docker (usage: make composer-require package=enshrined/svg-sanitize)
# ---------------------------

composer-require:
	@if [ -z "$(package)" ]; then \
		echo "ERROR: You must specify a package. Example:"; \
		echo "make composer-require package=enshrined/svg-sanitize"; \
		exit 1; \
	fi
	docker compose run --rm $(COMPOSER_SERVICE) bash -c "\
		cd $(THEME_PATH) && \
		echo 'Installing package: $(package)...' && \
		composer require $(package) --no-interaction && \
		echo 'Package $(package) installed successfully.'"

# ---------------------------
# Remove a package (usage: make composer-remove package=enshrined/svg-sanitize)
# ---------------------------

composer-remove:
	@if [ -z "$(package)" ]; then \
		echo 'ERROR: You must specify a package. Example:'; \
		echo 'make composer-remove package=enshrined/svg-sanitize'; \
		exit 1; \
	fi
	docker compose run --rm $(COMPOSER_SERVICE) bash -c "\
		cd $(THEME_PATH) && \
		echo 'Removing package: $(package)...' && \
		composer remove $(package) --no-interaction && \
		echo 'Package $(package) removed successfully.'"

# ---------------------------
# Lint and fix commands
# ---------------------------

lint:
	docker compose run --rm $(COMPOSER_SERVICE) bash -c "cd $(THEME_PATH) && composer run lint"

fix:
	docker compose run --rm $(COMPOSER_SERVICE) bash -c "cd $(THEME_PATH) && composer run fix"

phpcs:
	docker compose run --rm $(COMPOSER_SERVICE) php $(THEME_PATH)/vendor/bin/phpcs \
		--standard=WordPress --extensions=php --ignore=vendor,assets $(THEME_PATH)

phpcbf:
	docker compose run --rm $(COMPOSER_SERVICE) php $(THEME_PATH)/vendor/bin/phpcbf \
		--standard=WordPress --extensions=php --ignore=vendor,assets $(THEME_PATH)


# ---------------------------
# Docker compose system commands
# ---------------------------

up:
	docker compose up -d

down:
	docker compose down

clean:
	docker container prune -f
