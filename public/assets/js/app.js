/* Template Name: Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 3.2.0
   Created: May 2022
   File Description: Main JS file of the template
*/

/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Loader               *
 *     02.  Toggle Menus         *
 *     03.  Active Menu          *
 *     04.  Admin Menu           *
 *     05.  Clickable Menu       *
 *     06.  Menu Sticky          *
 *     07.  Back to top          *
 *     09.  Dark & Light Mode    *
 *     10.  LTR & RTL Mode       *
 *     11.  Small Menu  *
 ================================*/

document.addEventListener('DOMContentLoaded', () => {
    // Preloader
    const preloader = document.getElementById('preloader');
    if (preloader) {
        setTimeout(() => {
            preloader.style.visibility = 'hidden';
            preloader.style.opacity = '0';
        }, 350);
    }

    // Initialize all functions
    initFunctions();
});

/* global */
function initFunctions() {
    activateMenu();
    activateSidebarMenu();
    setupEventListeners();
}

// Active Sidebar
(() => {
    const currentPath = window.location.pathname;
    const excludePrefix = '/ui-components';

    if (currentPath.startsWith(excludePrefix)) return;

    const menuItems = document.querySelectorAll('.sidebar-nav a');

    menuItems.forEach(link => {
        try {
            const linkPath = new URL(link.href).pathname;

            // Remove any existing active class
            link.parentElement.classList.remove('active');

            // Match exact route
            if (linkPath === currentPath) {
                link.parentElement.classList.add('active');
            }
        } catch {
            console.warn("Invalid link", link.href);
        }
    });
})();


// Toggle menu function
function toggleMenu() {
    const toggleElement = document.getElementById('isToggle');
    const navElement = document.getElementById('navigation');

    const isOpen = toggleElement?.classList.toggle('open');
    if (navElement) {
        navElement.classList.toggle('hidden');
        toggleElement?.setAttribute('aria-expanded', isOpen);
    }
}

// Attach event listener
document.getElementById('isToggle')?.addEventListener('click', toggleMenu);

// Menu activation - Modernized version
function activateMenu() {
    const menuItems = document.querySelectorAll(".sub-menu-item");
    
    const normalizeUrl = url => url.replace(/\/+$/, '').split('?')[0];
    const currentUrl = normalizeUrl(window.location.href);

    menuItems.forEach(item => {
        const itemUrl = normalizeUrl(item?.href ?? '');

        if (itemUrl === currentUrl) {
            item.classList.add('active');

            let parent = item.closest('li');
            while (parent) {
                parent.classList.add('active');
                parent = parent.parentElement?.closest('li');
            }
        }
    });
}

// Admin sidebar menu activation
function activateSidebarMenu() {
    const sidebar = document.getElementById("sidebar");
    if (!sidebar) return;

    // Get clean current path (remove query params and hash)
    const currentPath = window.location.pathname.replace(/\/$/, '');

    if (/^\/blog-detail\/[^/]+$/.test(currentPath) || /^\/shop-item-detail\/[^/]+$/.test(currentPath)) return;
    
    // Reset all active states first
    sidebar.querySelectorAll('.active').forEach(el => el.classList.remove('active'));
    sidebar.querySelectorAll('.block').forEach(el => el.classList.remove('block'));

    // Find matching links
    const links = sidebar.querySelectorAll('a[href]');
    let foundExactMatch = false;

    links.forEach(link => {
        const linkPath = new URL(link.href, window.location.origin).pathname.replace(/\/$/, '');
        
        // Exact match
        if (currentPath === linkPath) {
            foundExactMatch = true;
            markMenuItemActive(link);
        }
    });

    // If no exact match found, try partial matches
    if (!foundExactMatch) {
        links.forEach(link => {
            const linkPath = new URL(link.href, window.location.origin).pathname.replace(/\/$/, '');
            if (currentPath.startsWith(linkPath)) {
                markMenuItemActive(link);
            }
        });
    }
}

// Helper function to mark menu items as active
function markMenuItemActive(link) {
    link.parentElement.classList.add('active');
    
    // Activate parent dropdowns
    let parent = link.closest('.sidebar-dropdown');
    while (parent) {
        parent.classList.add('active');
        const submenu = parent.querySelector('.sidebar-submenu');
        if (submenu) submenu.classList.add('block');
        parent = parent.parentElement.closest('.sidebar-dropdown');
    }
}

// Setup all event listeners
function setupEventListeners() {
    // Close sidebar
    const closeSidebar = document.getElementById("close-sidebar");
    if (closeSidebar) {
        closeSidebar.addEventListener("click", () => {
            document.querySelector(".page-wrapper")?.classList.toggle("toggled");
        });
    }

    // Navigation menu click handlers
    setupMenuClickHandlers("navigation");
    setupMenuClickHandlers("sidebar");

    // Window scroll events
    window.addEventListener('scroll', handleScrollEvents);

    // Back to top button
    const backToTop = document.getElementById("back-to-top");
    if (backToTop) {
        backToTop.addEventListener('click', topFunction);
    }
}

// Setup menu click handlers for both main nav and sidebar
function setupMenuClickHandlers(menuId) {
    const menu = document.getElementById(menuId);
    if (!menu) return;

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', (e) => {
            if (link.getAttribute("href") === "javascript:void(0)") {
                e.preventDefault();
                if (menuId === "navigation") {
                    const submenu = link.nextElementSibling?.nextElementSibling;
                    submenu?.classList.toggle('open');
                } else {
                    // For sidebar
                    if (link !== document.querySelector("li.sidebar-dropdown.active > a")) {
                        document.querySelector("li.sidebar-dropdown.active")?.classList.remove("active");
                        document.querySelector("div.sidebar-submenu.block")?.classList.remove("block");
                    }
                    link.parentElement.classList.toggle("active");
                    link.nextElementSibling?.classList.toggle("block");
                }
            }
        });
    });
}

// Scroll handling functions
function handleScrollEvents() {
    windowScroll();
    scrollFunction();
}

function windowScroll() {
    const navbar = document.getElementById("topnav");
    if (!navbar) return;

    navbar.classList.toggle("nav-sticky", window.scrollY >= 50);
}

function scrollFunction() {
    const backToTop = document.getElementById("back-to-top");
    if (backToTop) {
        backToTop.style.display = window.scrollY > 500 ? "block" : "none";
    }
}

function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}


/*********************/
/* Dark & Light Mode */
/*********************/
try {
    function changeTheme(e){
        e.preventDefault()
        const htmlTag = document.getElementsByTagName("html")[0]
        
        if (htmlTag.className.includes("dark")) {
            htmlTag.className = 'light'
        } else {
            htmlTag.className = 'dark'
        }
    }

    const switcher = document.getElementById("theme-mode")
    switcher?.addEventListener("click" ,changeTheme )
    
    const chk = document.getElementById('chk');

    chk.addEventListener('change',changeTheme);
} catch (err) {
    
}


/*********************/
/* LTR & RTL Mode */
/*********************/
try{
    const htmlTag = document.getElementsByTagName("html")[0]
    function changeLayout(e){
        e.preventDefault()
        const switcherRtl = document.getElementById("switchRtl")
        if(switcherRtl.innerText === "LTR"){
            htmlTag.dir = "ltr"
        }
        else{
            htmlTag.dir = "rtl"
        }
        
    }
    const switcherRtl = document.getElementById("switchRtl")
    switcherRtl?.addEventListener("click" ,changeLayout )
}
catch(err){}

/*********************/
/*     Small Menu    */
/*********************/
document.addEventListener("DOMContentLoaded", function () {

    // Nav links
    var navLinks = document.querySelectorAll('#navmenu-nav a[href^="#"]');

    if (!navLinks.length || typeof Gumshoe === "undefined") {
        return;
    }

    var hasValidTarget = false;

    navLinks.forEach(function (link) {
        var targetId = link.getAttribute('href');
        if (targetId && document.querySelector(targetId)) {
            hasValidTarget = true;
        }
    });

    if (!hasValidTarget) {
        return;
    }

    try {
        new Gumshoe('#navmenu-nav a', {
            offset: 80,
            reflow: true,
            events: false
        });
    } catch (e) {
        console.warn('Gumshoe skipped:', e);
    }

});