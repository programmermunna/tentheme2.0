const header_options_toggler = document.querySelector(
  ".header_options_toggler"
);
const header_options_icon = document.querySelector(".header_options_icon");
const header_options = document.querySelector(".header_options");
if (header_options_toggler && header_options && header_options_icon) {
  let open = false;
  function toggle() {
    open = !open;
    if (open) {
      header_options.classList.remove("scale-y-0");
      header_options_icon.classList.add("-rotate-90");
    } else {
      header_options_icon.classList.remove("-rotate-90");
      header_options.classList.add("scale-y-0");
    }
  }

  header_options_toggler.addEventListener("click", toggle);
  header_options_toggler.addEventListener("blur", () => {
    setTimeout(() => {
      toggle();
    }, 200);
  });
}

// Page Title Show
const all_page_title = document.querySelectorAll(".page_title");
if (all_page_title?.length > 0) {
  const currentPageName = location.pathname.split("/");
  const page_name = currentPageName[currentPageName.length - 1].split(".")[0];
  let title = "";
  if (!page_name || page_name?.toLocaleLowerCase() === "index") {
    title = "Dashboard";
  } else {
    title = page_name;
  }
  all_page_title.forEach(
    (ele) => (ele.innerHTML = title?.split("-").join(" ").split("_").join(" "))
  );
}

// Sidebar Toggler
const sidebar_toggler = document.getElementById("sidebar_toggler");
const sidebar = document.getElementById("sidebar");
const hide_sidebar = document.getElementById("hide_sidebar");
if (sidebar_toggler && sidebar && hide_sidebar) {
  let open = true;
  function toggle() {
    open = !open;
    if (open) {
      sidebar.style.width = "250px";
      sidebar.style.minWidth = "250px";
    } else {
      sidebar.style.minWidth = "0px";
      sidebar.style.maxWidth = "0px";
      sidebar.style.width = "0px";
    }
  }
  sidebar_toggler.addEventListener("click", toggle);
  hide_sidebar.addEventListener("click", toggle);

  window.addEventListener("DOMContentLoaded", function () {
    if (document.documentElement.clientWidth < 1024) {
      open = !open;
    }
  });
  window.addEventListener("resize", function () {
    if (document.documentElement.clientWidth < 1024) {
      open = !open;
    }
  });
}

// Sidebar Item Toggler
const all_ds_title = document.querySelectorAll(".ds_title");
const all_ds_ul = document.querySelectorAll(".ds_ul");
if (all_ds_title && all_ds_ul) {
  const heights = [];
  for (let i = 0; i < all_ds_ul.length; i++) {
    const ele = all_ds_ul[i];
    heights.push(ele.clientHeight);
    ele.style.height = ele.clientHeight + "px";
  }

  all_ds_title.forEach((title) => {
    let open = false;
    title.addEventListener("click", function () {
      const title_ref = this.dataset?.ref;

      const icon = this.children[2];
      if (open) {
        if (icon) {
          icon.style.transform = "rotate(0deg)";
        }
      } else {
        if (icon) {
          icon.style.transform = "rotate(90deg)";
        }
      }

      all_ds_ul.forEach((item, i) => {
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

  window.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
      all_ds_ul.forEach((item, i) => {
        const title = all_ds_title[i];
        const title_ref = title?.dataset?.ref;
        // const ref1 = all_ds_title[i]?.dataset?.ref;
        // const ref2 = item?.dataset?.ref;
        // console.log("ref1 ", ref1);
        // console.log("ref2 ", ref2);
        if (
          title.classList.contains("active") &&
          title_ref?.toLowerCase() === item?.dataset?.ref?.toLowerCase()
        ) {
        } else {
          item.style.height = "0px";
        }
      });
    }, 0);
  });
}

// Popup Handle
const all_popup_remove = document.querySelectorAll(".popup_remove");
const all_popup_show = document.querySelectorAll(".popup_show");
const all_popup_wrapper = document.querySelectorAll(".popup_wrapper");
if (
  all_popup_remove?.length > 0 &&
  all_popup_wrapper?.length > 0 &&
  all_popup_show?.length > 0
) {
  all_popup_show.forEach((btn) => {
    btn.addEventListener("click", function () {
      all_popup_wrapper.forEach((popup) => {
        const target1 = this?.dataset?.target;
        const target2 = popup?.dataset?.target;
        if (target1 === target2) {
          popup.style.display = "flex";
        }
      });
    });
  });

  all_popup_remove.forEach((btn) => {
    btn.addEventListener("click", function () {
      all_popup_wrapper.forEach((popup) => {
        const target1 = this?.dataset?.target;
        const target2 = popup?.dataset?.target;
        if (target1 === target2) {
          popup.style.display = "none";
        }
      });
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


