document.addEventListener("DOMContentLoaded", function () {
    const COLORS = {
        ACTIVE_BG: "#118B50",
        INACTIVE_BG: "#118b501a",
    };

    const tabControls = document.querySelectorAll("#tab-controls > div");
    const tabs = {
        tab1: document.getElementById("tab-1"),
        tab2: document.getElementById("tab-2"),
        tab3: document.getElementById("tab-3"),
    };

    tabs.tab1.style.display = "none";
    tabs.tab2.style.display = "none";
    tabs.tab3.style.display = "none";

    function showTab(tabId) {
        Object.values(tabs).forEach(tab => {
            tab.style.display = "none";
        });
        tabs[tabId].style.display = "flex";
    }

    tabControls.forEach(control => {
        control.addEventListener("click", function (event) {
            const target = event.target;
            if (target.tagName === "DIV") {
                tabControls.forEach(ctrl => {
                    ctrl.style.backgroundColor = COLORS.INACTIVE_BG;
                });
                target.style.backgroundColor = COLORS.ACTIVE_BG;
                const tabId = target.getAttribute("data-tab");
                showTab(`tab${tabId}`);
            }
        });
    });

    showTab("tab1");
});
