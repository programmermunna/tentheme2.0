// Dashboard Sidebar
const all_ds_title = document.querySelectorAll(".ds_title");
const all_ds_div = document.querySelectorAll(".ds_div");
if (all_ds_title && all_ds_div) {
  const heights = [];
  for (let i = 0; i < all_ds_div.length; i++) {
    const ele = all_ds_div[i];
    heights.push(ele.clientHeight);
    ele.style.height = ele.clientHeight + "px";
  }

  all_ds_title.forEach((title) => {
    let open = true;
    title.addEventListener("click", function () {
      const title_ref = this.dataset?.ref;

      const icon = this.children[1];
      if (open) {
        icon.style.transform = "rotate(-90deg)";
      } else {
        icon.style.transform = "rotate(0deg)";
      }

      all_ds_div.forEach((item, i) => {
        const item_ref = item.dataset?.ref;
        if (title_ref === item_ref) {
          if (open) {
            item.style.height = "0px";
          } else {
            item.style.height = heights[i] + "px";
          }
          open = !open;
        }
      });
    });
  });
}

// dashboard Options Toggle
const dashboard_options_handler = document.getElementById(
  "dashboard_options_handler"
);
const dashboard_options = document.getElementById("dashboard_options");
if (dashboard_options_handler && dashboard_options) {
  let open = false;
  function toggle(action) {
    if (action === "hide") {
      open = false;
    } else {
      open = !open;
    }
    if (open) {
      dashboard_options.classList.remove("scale-y-0");
      dashboard_options_handler.children[3].classList.remove("rotate-180");
    } else {
      dashboard_options.classList.add("scale-y-0");
      dashboard_options_handler.children[3].classList.add("rotate-180");
    }
  }
  dashboard_options_handler.addEventListener("click", toggle);
  dashboard_options_handler.addEventListener("blur", function () {
    setTimeout(() => {
      toggle("hide");
    }, 200);
  });
}

// Toggle Theme
window.addEventListener("DOMContentLoaded", () => {
  const theme = localStorage.getItem("theme");
  if (!theme) {
    localStorage.setItem("theme", "light");
    document.documentElement.classList.add("light");
  }

  if (localStorage.theme === "dark") {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
});

const toggleTheme = () => {
  if (localStorage.theme === "dark") {
    localStorage.theme = "light";
    document.documentElement.classList.remove("dark");
    return "light";
  } else {
    localStorage.theme = "dark";
    document.documentElement.classList.add("dark");
    return "dark";
  }
};

// ites view change
const all_items_view_handler = document.querySelectorAll(".items_view_handler");
const all_items = document.querySelectorAll(".items");
if (all_items_view_handler[0] && all_items[0]) {
  if (this.document.documentElement.clientWidth < 767) {
    all_items_view_handler.forEach((b) => (b.style.display = "none"));
    all_items.forEach((ele) => {
      ele.classList.remove("list_view");
      ele.classList.add("grid_view");
    });
  } else {
    let view = "list_view";

    all_items_view_handler.forEach((ele) => {
      ele.addEventListener("click", function () {
        all_items_view_handler.forEach((ele) =>
          ele.classList.remove("active_view")
        );

        this.classList.add("active_view");
        view = this.dataset.view;

        if (view === "list_view") {
          all_items.forEach((ele) => {
            ele.classList.remove("grid_view");
            ele.classList.add("list_view");
          });
        }

        if (view === "grid_view") {
          all_items.forEach((ele) => {
            ele.classList.remove("list_view");
            ele.classList.add("grid_view");
          });
        }
      });
    });
  }

  window.addEventListener("resize", function () {
    if (this.document.documentElement.clientWidth < 767) {
      all_items_view_handler.forEach((b) => (b.style.display = "none"));
      all_items.forEach((ele) => {
        ele.classList.remove("list_view");
        ele.classList.add("grid_view");
      });
    } else {
      all_items_view_handler.forEach((b) => (b.style.display = "grid"));
      all_items.forEach((ele) => {
        ele.classList.remove("grid_view");
        ele.classList.add("list_view");
      });
    }
  });
}

// Signle Item Details page toggler
const all_item_content_toggler = document.querySelectorAll(
  ".item_content_toggler"
);
const all_item_content = document.querySelectorAll(".item_content");

if (all_item_content[0] && all_item_content_toggler[0]) {
  all_item_content_toggler.forEach((btn) => {
    btn.addEventListener("click", function () {
      all_item_content.forEach((item, i) => {
        all_item_content_toggler[i].classList.remove("active");
        if (item.dataset?.item === btn.dataset?.item) {
          item.classList.remove("hidden");
          item.classList.add("block");
          btn.classList.add("active");
        } else {
          item.classList.add("hidden");
          item.classList.remove("block");
        }
      });
    });
  });
}

// Slider

const header_slider_slides = document.getElementById("header_slider_slides");
const all_header_slides_toggle = document.querySelectorAll(
  ".header_slides_toggle"
);

const all_header_slides_image = document.querySelectorAll(
  ".header_slides_image"
);

const all_header_slides_text = document.querySelectorAll(".header_slides_text");

if (
  header_slider_slides &&
  all_header_slides_toggle &&
  all_header_slides_text
) {
  all_header_slides_toggle.forEach((btn) => {
    btn.addEventListener("click", function () {
      const target = this.dataset.target;

      all_header_slides_text.forEach((text) => {
        const text_target = text.dataset.target;

        if (text_target === target) {
          text.style.zIndex = "40";
          text.style.opacity = "1";
          text.children[0].children[0].style.transform = "translateY(0%)";
          text.children[0].children[1].style.transform = "translateY(0%)";
        } else {
          text.style.zIndex = "30";
          text.style.opacity = "0";
          text.children[0].children[0].style.transform = "translateY(-50%)";
          text.children[0].children[1].style.transform = "translateY(50%)";
        }
      });

      all_header_slides_image.forEach((img) => {
        const img_target = img.dataset.target;
        if (target === img_target) {
          img.style.zIndex = "10";
          img.style.transform = "translateX(0%)";
          img.style.opacity = "1";
        } else {
          img.style.zIndex = "5";
          img.style.opacity = "0";
          setTimeout(() => {
            img.style.transform = "translateX(100%)";
          }, 500);
        }
      });

      all_header_slides_toggle.forEach((btn) =>
        btn.setAttribute("disabled", "true")
      );

      setTimeout(() => {
        all_header_slides_toggle.forEach((btn) =>
          btn.removeAttribute("disabled")
        );
      }, 500);
    });
  });
}

const all_header_sub_parent = document.querySelectorAll(".header_sub_parent");
const all_header_sub_ul_toggle = document.querySelectorAll(
  ".header_sub_ul_toggle"
);

if (all_header_sub_parent && all_header_sub_ul_toggle) {
  for (let i = 0; i < all_header_sub_ul_toggle.length; i++) {
    all_header_sub_ul_toggle[i].addEventListener("mouseenter", function () {
      this.nextElementSibling.classList.remove("scale-y-0");
      this.nextElementSibling.classList.add("scale-y-100");
      this.classList.add("bg-white");
    });

    all_header_sub_parent[i].addEventListener("mouseleave", function () {
      this.children[0].classList.remove("bg-white");
      this.children[1].classList.remove("scale-y-100");
      this.children[1].classList.add("scale-y-0");
    });
  }
}

const reseller_btn = document.getElementById("reseller_btn");
if (reseller_btn) {
  reseller_btn.addEventListener("click", function () {
    this.innerText = "Processing...";
  });
}

const copy_affiliate_link_btn = document.getElementById(
  "copy_affiliate_link_btn"
);

if (copy_affiliate_link_btn) {
  copy_affiliate_link_btn.addEventListener("click", function () {
    var copyText = document.getElementById("affiliate_link_input");

    copyText.select();

    copyText.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(copyText.value);

    this.innerHTML = "Copied";

    setTimeout(() => {
      this.innerHTML = `<i class="fa-solid fa-copy"></i>`;
    }, 1000);
  });
}

// Cart Functionality
const cart_added_popup = document.querySelector(".cart_added_popup");

function show_added_popup(id) {
  let previous = localStorage.getItem("ids")
    ? JSON.parse(localStorage.getItem("ids"))
    : [];

  let latest = [];

  if (previous.includes(id)) {
    latest = previous.filter((p_id) => p_id !== id);
  } else {
    latest = [...previous, id];
  }

  localStorage.setItem("ids", JSON.stringify(latest));

  if (latest?.length > 0) {
    document.querySelector(
      ".cart_items_wrapper"
    ).innerHTML = `<small class="cart_items bg-green-600 text-white text-xs w-6 h-6 flex items-center justify-center font-semibold rounded-full">${latest?.length}</small>`;
  } else {
    document.querySelector(".cart_items_wrapper").innerHTML = ``;
  }
}

function dismis_cart_added_popup() {
  cart_added_popup.style.display = "none";
}

window.addEventListener("load", () => {
  const ids = JSON.parse(localStorage.getItem("ids"));
  const cart_items_wrapper = document.querySelector(".cart_items_wrapper");

  if (cart_items_wrapper && ids?.length > 0) {
    cart_items_wrapper.innerHTML = `
    <small
    class="cart_items bg-green-600 text-white text-xs w-6 h-6 flex items-center justify-center font-semibold rounded-full">${ids?.length}</small>
    `;
  }
});

// toggle_license
const toggle_license = document.querySelector(".toggle_license");
const item_title = document.querySelector(".item_title");
const items_del_price = document.querySelector(".items_del_price");
const items_price = document.querySelector(".items_price");

const all_item_license = document.querySelectorAll(".item_license");

if (
  toggle_license &&
  item_title &&
  items_del_price &&
  items_price &&
  all_item_license
) {
  let open = false;
  const item_licenses = document.querySelector(".item_licenses");
  toggle_license.addEventListener("click", function () {
    open = !open;
    if (open) {
      item_licenses.classList.remove("hidden");
    } else {
      item_licenses.classList.add("hidden");
    }
  });
  toggle_license.addEventListener("blur", function () {
    setTimeout(() => {
      open = !open;
      item_licenses.classList.add("hidden");
    }, 200);
  });

  all_item_license.forEach((ele) => {
    ele.addEventListener("click", function () {
      const price_old = this.dataset.oldprice;
      const price = this.dataset.price;
      const title = this.dataset.title;
      item_title.innerText = title;
      items_price.innerText = price;
      items_del_price.innerText = price_old;
    });
  });
}

const empty_cart = document.getElementById("empty_cart");
if (empty_cart) {
  empty_cart.addEventListener("click", function () {
    location.reload();

    localStorage.clear();
  });
}

const toggle_menu = document.getElementById("toggle_menu");
const menu_ul = document.getElementById("menu_ul");
const mobile_header_overlay = document.getElementById("mobile_header_overlay");

if (toggle_menu && menu_ul) {
  let open = false;
  function toggle() {
    open = !open;
    if (open) {
      toggle_menu.innerHTML = `<i class="fa-solid fa-xmark text-red-100"></i>`;
      menu_ul.classList.remove("scale-y-0");
      mobile_header_overlay.classList.remove("hidden");
    } else {
      toggle_menu.innerHTML = `<i class="fa-solid fa-bars"></i>`;
      menu_ul.classList.add("scale-y-0");
      mobile_header_overlay.classList.add("hidden");
    }
  }

  toggle_menu.addEventListener("click", toggle);
  mobile_header_overlay.addEventListener("click", toggle);
}

// Cart and Checkout
const checkout_btn = document.getElementById("checkout_btn");

if (checkout_btn) {
  checkout_btn.addEventListener("click", function () {
    this.innerText = "Processing...";
  });
}

const all_method_name = document.querySelectorAll(".method_name");
const all_method_content = document.querySelectorAll(".method_content");

if (all_method_name) {
  all_method_name.forEach((m) => {
    m.addEventListener("click", function () {
      all_method_name.forEach((m, i) => {
        if (all_method_content[i].dataset.method === this.dataset.method) {
          all_method_content[i].classList.remove("hidden");
        } else {
          all_method_content[i].classList.add("hidden");
        }
        m.classList.remove("active");
      });

      this.classList.add("active");
    });
  });
}

window.addEventListener('DOMContentLoaded', () => {
  const popup_msg = document.getElementById("popup_msg");
  if (popup_msg) {
    popup_msg.innerHTML = `
  <div id="popup_msg" style="position: fixed; top: 100px; right: 20px; z-index:999; background:#31B0D5; color:white; display:flex; padding:12px; align-items:center; gap:6px; border-radius: 5px; line-height: 0px; ">
  <span style="font-size:18px;"> 
  <i class="fa-solid fa-check"></i>
  </span>
  <h6 style="background:black;color:white;">
  ${popup_msg?.dataset?.text} </div>
  </h6> `
    setTimeout(() => {
      popup_msg.innerHTML = ''
    }, popup_msg?.dataset?.time || 2000)}

    const error_msg = document.getElementById("error_msg");
    if (error_msg) {
      error_msg.innerHTML = `
    <div id="error_msg" style="position: fixed; top: 100px; right: 20px; z-index:999; background:red; color:white; display:flex; padding:12px; align-items:center; gap:6px; border-radius: 5px; line-height: 0px; ">
    <span style="font-size:18px;"> 
    <i class="fa-solid fa-triangle-exclamation"></i>
    </span>
    <h6 style="background:black;color:white;">
    ${error_msg?.dataset?.text} </div>
    </h6> `
      setTimeout(() => {
        error_msg.innerHTML = ''
      }, error_msg?.dataset?.time || 2000)}
  })