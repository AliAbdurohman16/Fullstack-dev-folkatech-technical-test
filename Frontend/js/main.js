// show password
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showPasswordIcon = document.querySelector(".show-password");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      showPasswordIcon.innerHTML = "Hide";
    } else {
      passwordInput.type = "password";
      showPasswordIcon.innerHTML = "Show";
    }
}
  
// accordion
document.addEventListener('DOMContentLoaded', function() {
    var accordionHeaders = document.querySelectorAll('.accordion-header');
  
    accordionHeaders.forEach(function(header) {
        header.addEventListener('click', function() {
            var accordionItem = this.parentElement;
            var isActive = accordionItem.classList.contains('active');
            var accordionIcon = this.querySelector('.accordion-icon');
    
            if (!isActive) {
                accordionHeaders.forEach(function(header) {
                    header.parentElement.classList.add('active');
                    header.querySelector('.accordion-icon').innerHTML = '<i class="fas fa-chevron-up accordion-icon"></i>';
                });
        
                accordionItem.classList.add('active');
                accordionIcon.innerHTML = '<i class="fas fa-chevron-up accordion-icon"></i>';
            } else {
                accordionItem.classList.remove('active');
                accordionIcon.innerHTML = '<i class="fas fa-chevron-down accordion-icon"></i>';
            }
        });
    });
});  


// range progress
function controlFromInput(fromSlider, fromInput, toInput, controlSlider) {
    const [from, to] = getParsed(fromInput, toInput);
    fillSlider(fromInput, toInput, '#757575', '#EB3F36', controlSlider);
    if (from > to) {
      fromSlider.value = to;
      fromInput.value = formatNumber(to);
    } else {
      fromSlider.value = from;
    }
  }
  
  function controlToInput(toSlider, fromInput, toInput, controlSlider) {
    const [from, to] = getParsed(fromInput, toInput);
    fillSlider(fromInput, toInput, '#757575', '#EB3F36', controlSlider);
    setToggleAccessible(toInput);
    if (from <= to) {
      toSlider.value = to;
      toInput.value = formatNumber(to);
    } else {
      toInput.value = formatNumber(from);
    }
  }
  
  function controlFromSlider(fromSlider, toSlider, fromInput) {
    const [from, to] = getParsed(fromSlider, toSlider);
    fillSlider(fromSlider, toSlider, '#757575', '#EB3F36', toSlider);
    if (from > to) {
      fromSlider.value = to;
      fromInput.value = formatNumber(to);
    } else {
      fromInput.value = formatNumber(from);
    }
  }
  
  function controlToSlider(fromSlider, toSlider, toInput) {
    const [from, to] = getParsed(fromSlider, toSlider);
    fillSlider(fromSlider, toSlider, '#757575', '#EB3F36', toSlider);
    setToggleAccessible(toSlider);
    if (from <= to) {
      toSlider.value = to;
      toInput.value = formatNumber(to);
    } else {
      toInput.value = formatNumber(from);
      toSlider.value = from;
    }
  }
  
  function getParsed(currentFrom, currentTo) {
    const from = parseInt(currentFrom.value.replace(/\./g, ''), 10) || 1000;
    const to = parseInt(currentTo.value.replace(/\./g, ''), 10) || 1000;
    return [from, to];
  }
  
  function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
    const rangeDistance = to.max - to.min;
    const fromPosition = from.value - to.min;
    const toPosition = to.value - to.min;
    controlSlider.style.background = `linear-gradient(
      to right,
      ${sliderColor} 0%,
      ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
      ${rangeColor} ${((fromPosition / rangeDistance) * 100)}%,
      ${rangeColor} ${(toPosition / rangeDistance) * 100}%,
      ${sliderColor} ${(toPosition / rangeDistance) * 100}%,
      ${sliderColor} 100%
    )`;
  }
  
  function setToggleAccessible(currentTarget) {
    const toSlider = document.querySelector('#toSlider');
    if (Number(currentTarget.value.replace(/\./g, '')) <= 0) {
      toSlider.style.zIndex = 2;
    } else {
      toSlider.style.zIndex = 0;
    }
  }
  
  function formatNumber(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
  }
  
  const fromSlider = document.querySelector('#fromSlider');
  const toSlider = document.querySelector('#toSlider');
  const fromInput = document.querySelector('#fromInput');
  const toInput = document.querySelector('#toInput');
  fillSlider(fromSlider, toSlider, '#757575', '#EB3F36', toSlider);
  setToggleAccessible(toSlider);
  
  fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
  toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
  fromInput.oninput = () => controlFromInput(fromSlider, fromInput, toInput, toSlider);
  toInput.oninput = () => controlToInput(toSlider, fromInput, toInput, toSlider);  

// sorting
document.addEventListener("DOMContentLoaded", function() {
    const showSelect = document.getElementById("show-select");
    const sortSelect = document.getElementById("sort-select");
  
    showSelect.addEventListener("change", function() {
      const selectedValue = showSelect.value;
      console.log("Menampilkan", selectedValue);
    });
  
    sortSelect.addEventListener("change", function() {
      const selectedValue = sortSelect.value;
      console.log("Mengurutkan berdasarkan", selectedValue);
    });
});
  