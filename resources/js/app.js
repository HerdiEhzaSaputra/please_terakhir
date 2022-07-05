import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

$(".btn-dropdown").click(function () {
    let $select2 = $(this).parent().siblings("#dropdown-arrow");
    $select2.find("option").prop("selected", "selected");
    $select2.trigger("change");
});

// unhide sidebar
document.getElementById("sidebarOpen").addEventListener("click", function () {
    document.getElementById("sidebar").classList.remove("hidden");
    document.getElementById("backdrop").classList.remove("hidden");
});

// theme toggle
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("theme-preference") === "light" ||
    (!("theme-preference" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: light)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("theme-preference")) {
        if (localStorage.getItem("theme-preference") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme-preference", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("theme-preference", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("theme-preference", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme-preference", "dark");
        }
    }
});

const getColorPreference = () => {
    if (localStorage.getItem("theme-preference"))
        return localStorage.getItem("theme-preference");
    else
        return window.matchMedia("(prefers-color-scheme: light)").matches
            ? "light"
            : "dark";
};

const setPreference = () => {
    localStorage.setItem("theme-preference", getColorPreference.value);
    reflectPreference();
};

window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", ({ matches: isDark }) => {
        getColorPreference.value = isDark ? "dark" : "light";
        setPreference();
    });

// select2
$(".select2").select2();

$(".btn-select-all").click(function () {
    let $select2 = $(this).parent().siblings(".select2");
    $select2.find("option").prop("selected", "selected");
    $select2.trigger("change");
});
$(".btn-deselect-all").click(function () {
    let $select2 = $(this).parent().siblings(".select2");
    $select2.find("option").prop("selected", "");
    $select2.trigger("change");
});

$(".treeview").each(function () {
    var shouldExpand = false;
    $(this)
        .find("li")
        .each(function () {
            if ($(this).hasClass("active")) {
                shouldExpand = true;
            }
        });
    if (shouldExpand) {
        $(this).addClass("active");
    }
});
