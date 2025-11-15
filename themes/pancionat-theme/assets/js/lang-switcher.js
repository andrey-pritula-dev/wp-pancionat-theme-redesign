jQuery(function ($) {
  $(".lang-option").on("click", function () {
    const lang = $(this).data("lang");

    $.post(pancionatLang.ajaxurl, {
      action: "pancionat_theme_change_lang",
      nonce: pancionatLang.nonce,
      lang: lang,
    })
      .done(function (res) {
        if (res && res.success) {
          $(".lang-option").css("color", "#000");
          $(`.lang-option[data-lang="${lang}"]`).css("color", "rgb(194,78,96)");

          window.location.reload();
        } else {
          console.warn("Language switch failed", res);
        }
      })
      .fail(function (xhr) {
        console.error("AJAX error", xhr);
      });
  });
});
