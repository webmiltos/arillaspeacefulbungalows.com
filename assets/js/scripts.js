jQuery(document).ready(function () {
	jQuery('.scroll-div').click(function () {
		var scrollId = jQuery(this).data('scrollid');
		if (!scrollId)
			return false;
		var scrollpos = jQuery('#' + scrollId).offset().top;
		var headerHeight = jQuery('.custom-header').outerHeight();
		scrollpos = scrollpos - (headerHeight + 0);
		jQuery('html,body').animate({
			scrollTop: (scrollpos)
		}, 1000, function () { });
	})
})



// mobile header toggle
jQuery(".burger-menu").click(function () {
	jQuery(".burger-menu").toggleClass("show");
	jQuery(".header-wrap-mobile").toggleClass("show");
	jQuery(".menu-mob").toggleClass("show");
});
jQuery('.menu-mob').on('click', function (e) {
	if (e.target.className !== "menu-mob-wrap" && !jQuery(e.target).parents('.menu-mob-wrap').length) {
		jQuery(".burger-menu").removeClass("show");
		jQuery(".menu-mob").removeClass("show");
		jQuery(".header-wrap-mobile").removeClass("show");
	}
});



jQuery('.header-menu-wrap .menu .menu-item-has-children').on('mouseenter', function () {
	jQuery(this).addClass("active");
	jQuery('.sub-menu', this).addClass("active");
}).on('mouseleave', function () {
	const $this = jQuery(this);
	setTimeout(function () {
		if (!$this.is(':hover') && !$this.find('.sub-menu:hover').length) {
			$this.removeClass("active");
			jQuery('.sub-menu', $this).removeClass("active");
		}
	}, 50); // Adjust timeout as needed
});


jQuery('.useful-repeater .useful-link').on('mouseenter', function () {
	jQuery(this).addClass("active");
	jQuery('.sub-menu', this).addClass("active");
}).on('mouseleave', function () {
	const $this = jQuery(this);
	setTimeout(function () {
		if (!$this.is(':hover') && !$this.find('.sub-menu:hover').length) {
			$this.removeClass("active");
			jQuery('.sub-menu', $this).removeClass("active");
		}
	}, 50); // Adjust timeout as needed
});



// Detect request animation frame
var scroll = window.requestAnimationFrame ||
	// IE Fallback
	function (callback) { window.setTimeout(callback, 1000 / 60) };

var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {
	var scrollFromTop = window.pageYOffset || document.documentElement.scrollTop;
	var i;

	if (elementsToShow.length) {
		for (i = 0; i < elementsToShow.length; i++) {
			if (isElementPartiallyInViewport(elementsToShow[i])) {
				elementsToShow[i].classList.remove('slide-right');
				elementsToShow[i].classList.remove('slide-up');
				elementsToShow[i].classList.remove('slide-down');
				elementsToShow[i].classList.remove('slide-left');
			}
		}
	}

	if (scrollFromTop >= 150) {
		jQuery(".custom-header, .mob-header").addClass("scrolled");
	}
	else {
		jQuery(".custom-header, .mob-header").removeClass("scrolled");
	}

	scroll(loop);
}

// Call the loop for the first time
loop();



// HELPER FUNCTIONS TO CHECK ELEMENT VISIBILITY

function isElementPartiallyInViewport(el) {
	//special bonus for those using jQuery
	if (typeof jQuery !== 'undefined' && el instanceof jQuery) el = el[0];

	var rect = el.getBoundingClientRect();
	// DOMRect { x: 8, y: 8, width: 100, height: 100, top: 8, right: 108, bottom: 108, left: 8 }
	var windowHeight = (window.innerHeight || document.documentElement.clientHeight);
	var windowWidth = (window.innerWidth || document.documentElement.clientWidth);

	// http://stackoverflow.com/questions/325933/determine-whether-two-date-ranges-overlap
	var vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
	var horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

	return (vertInView && horInView);
}




// on click copy Link
// function copyTextToClipboard(text) {
// 	var textArea = document.createElement("textarea");
// 	textArea.style.position = 'fixed';
// 	textArea.style.top = 0;
// 	textArea.style.left = 0;

// 	textArea.style.width = '2em';
// 	textArea.style.height = '2em';

// 	textArea.style.padding = 0;

// 	textArea.style.border = 'none';
// 	textArea.style.outline = 'none';
// 	textArea.style.boxShadow = 'none';

// 	textArea.style.background = 'transparent';


// 	textArea.value = text;

// 	document.body.appendChild(textArea);

// 	textArea.select();

// 	try {
// 		var successful = document.execCommand('copy');
// 		var msg = successful ? 'successful' : 'unsuccessful';
// 		console.log('Copying text command was ' + msg);
// 	} catch (err) {
// 		console.log('Oops, unable to copy');
// 	}

// 	document.body.removeChild(textArea);
// }

// function copyLink() {
// 	copyTextToClipboard(location.href);
// 	jQuery('#copied-text').fadeIn().delay(2000).fadeOut();
// }




// show/hide mobile submenu
jQuery(document).ready(function ($) {
	jQuery('.mob-header .menu-item-has-children > a').click(function (event) {
		event.stopPropagation();
	});
	jQuery('.mob-header .menu-item-has-children').click(function () {
		jQuery(this).toggleClass('show');
		jQuery('.sub-menu', this).toggleClass('show');
	});
});




// on click of submit button at form, smooth scroll to notice that cf7 shows
jQuery(".form-submit-btn").click(function () { // class of submit button
	setTimeout(
		function () {
			jQuery('html,body').animate({
				scrollTop: jQuery(".wpcf7-response-output").offset().top - 380
			}, //class to scroll
				'slow');
		}, 3000); // we add time out to make the scroll after some seconds of button click
});
//if you send success message it scrolls you to top automatically so we add scroll to response later
document.addEventListener('wpcf7mailsent', function (event) {
	setTimeout(
		function () {
			jQuery('html,body').animate({
				scrollTop: jQuery(".wpcf7-response-output").offset().top - 380
			}, //class to scroll
				'slow');
		}, 2000);
}, false);



jQuery(document).ready(function () {
	jQuery(".expand-content-text").each(function () {

		var textWrapHeight = jQuery(this).height();
		var maxTextHeight = 300;

		if (textWrapHeight > maxTextHeight) {
			// console.log(textWrapHeight);
			var readContent = document.getElementById('readML');
			jQuery(this).addClass('expand');
			readContent = jQuery(this).find("#readML").html("Διαβάστε περισσότερα");

			jQuery(this).find("#readML").click(function () {
				// console.log("click");
				jQuery(this).parent('.expand-content-text').toggleClass("expand");
				if (jQuery(this).parent('.expand-content-text').hasClass("expand")) {
					jQuery(this).html("Διαβάστε περισσότερα");
				} else {
					jQuery(this).html("Διαβάστε λιγότερα");
				}
			});
		}
	});
});



// Burger Toggle
jQuery('.site-header__right_burger').on('click', function (event) {
	if (!event.target.closest('.burger-area')) {
		jQuery(".burger-area").toggleClass("hidden");
		jQuery(".site-header__right_burger").toggleClass("active");
		jQuery(".site-header").toggleClass("menu-open");
	}
});



// Sub-menu
jQuery('.menu-item-has-children').on('click', function (event) {
	jQuery(this).find('.sub-menu').toggleClass("active");
});

// Sub-menu
jQuery('.main-menu .menu-item-has-children').on('mouseover', function (event) {
	jQuery(this).addClass("active");
});
document.addEventListener('mouseover', function (event) {
	if (!event.target.closest('.main-menu, .sub-menu')) {
		jQuery(".menu-item-has-children").removeClass("active");
	}
}, false);





// Info Pages Mobile Menu
jQuery(".mobile-info-tab").click(function () {
	jQuery(this).toggleClass('rotate');
	jQuery(".sidebar-menu").toggleClass('active');
});

// Info Pages Mobile Menu
jQuery(".share").click(function () {
	jQuery(".share-items").toggleClass('show');
});




jQuery(".question").click(function () {
	var faqItem = jQuery(this).closest('.single-faq');
	var allFaqItems = jQuery('.single-faq');

	// Toggle 'active' class for the clicked item
	faqItem.find(".faq-content").toggleClass('active');
	faqItem.find(".answer").toggleClass('active');

	// Remove 'active' class from other items
	allFaqItems.not(faqItem).find('.faq-content.active').removeClass('active');
	allFaqItems.not(faqItem).find('.answer.active').removeClass('active');
});



// FORMS FLOATING LABELS
jQuery(document).ready(function ($) { //no conflict

	jQuery('.floating-labels-form').find('input, textarea, select').each(function () {
		if ($(this).val()) { //In case there is a preloaded value
			$(this).parents('.single-field').find("label").addClass("floated-label");
		} else {
			$(this).parents('.single-field').find("label").removeClass("floated-label");
		}
	});

	jQuery('.floating-labels-form').find('input, textarea, select').on('focus', function () { //On focus move the label
		$(this).parents('.single-field').find("label").addClass("floated-label");
	});

	jQuery('.floating-labels-form').find('input, textarea, select').on('blur', function () { //On blur check if there is any value, else remove the floated-label class.
		if (!$(this).val() && !$(this).hasClass('active')) {
			$(this).parents('.single-field').find("label").removeClass("floated-label");
		}
	});


	// close callback modal on submit
	var cf7Form = $('.floating-labels-form .wpcf7-form');

	cf7Form.on('wpcf7submit', function (event) {
		if (event.detail.status == 'mail_sent') {
			console.log('form submitted')
			setTimeout(function () {
				jQuery('.single-field').find("label").removeClass('floated-label');
			}, 200);
		}
	});
});



// DATEPICKERS
var checkInDatepicker = jQuery("#your-check-in").flatpickr({
	dateFormat: "d M Y",
	"locale": {
		"firstDayOfWeek": 1 // start week on Monday
	},
	minDate: "today",
	disableMobile: true,
	onChange: function (selectedDates) {
		const selectedDate = selectedDates[0];
		const nextDay = new Date(selectedDate.getTime());
		nextDay.setDate(selectedDate.getDate() + 1); // Add 1 day
		checkOutDatepicker.set("minDate", nextDay);
	}
});
var checkOutDatepicker = jQuery("#your-check-out").flatpickr({
	dateFormat: "d M Y",
	"locale": {
		"firstDayOfWeek": 1 // start week on Monday
	},
	disableMobile: true,
	minDate: "today",
});
jQuery('#your-time').flatpickr({
	enableTime: true,
	noCalendar: true,
	time_24hr: true,
	dateFormat: "H:i",
	minTime: "10:00",
	maxTime: "23:00",
	disableMobile: true
});

document.addEventListener('DOMContentLoaded', function () {
	// Date picker elements
	const checkInInput = document.getElementById('your-check-in');
	const checkOutInput = document.getElementById('your-check-out');

	// Initialize Flatpickr with the correct date format and minDate option
	if (window.flatpickr) {
		flatpickr(checkInInput, {
			dateFormat: "Y-m-d", // Submitted format
			altInput: true,
			altFormat: "d M Y", // Displayed format
			minDate: "today",
			onChange: function (selectedDates) {
				// Optional: Additional logic for date handling
			}
		});

		flatpickr(checkOutInput, {
			dateFormat: "d M Y",
			minDate: "today", // Disable all dates before today
			onChange: function (selectedDates) {
				const selectedDate = selectedDates[0];
				const day = String(selectedDate.getDate()).padStart(2, '0');
				const month = String(selectedDate.getMonth() + 1).padStart(2, '0');
				const year = selectedDate.getFullYear();
				checkOutInput.value = `${year}-${month}-${day}`;
			}
		});
	}

	// Form submit event
	document.getElementById('submit').addEventListener('click', function (e) {
		if (!checkInInput.value || !checkOutInput.value) {
			e.preventDefault(); // Prevent form submission if dates are not selected
			alert('Please select both check-in and check-out dates.');
		}
	});
});



// document.getElementById('submit').addEventListener('click', function (e) {
// 	const adultsValue = document.getElementById('adults').value;
// 	console.log("Selected Adults: ", adultsValue); // Debug: Check the selected value
// 	if (!adultsValue) {
// 		e.preventDefault(); // Prevent form submission if no adults selected
// 		alert('Please select the number of adults.');
// 	}
// });


// add class on footer menu (mobile)
jQuery(".footer-menu-wrap").click(
	function () {
		jQuery(this).toggleClass('show');
		jQuery('.sub-menu', this).toggleClass('show');
	},
);


// single service, colors section
jQuery(".colors-wrapper").click(
	function () {
		jQuery(this).toggleClass('open');
	}
);


// Footer Mobile Sub-menu
jQuery(".footer-menu-wrap").click(function () {
	jQuery(this).toggleClass('active');
});


jQuery('.gallery-tab-link').on('click', function () {
	jQuery('.gallery-tab-link').removeClass('active');
	jQuery(this).addClass('active');

	jQuery('.gallery-wrap-page').removeClass('active'); // hide all tabs
	var targetTab = jQuery('.gallery-wrap-page[data-id="' + jQuery(this).data('id') + '"]'); // find the target tab of that button
	targetTab.addClass('active');  //show target tab
});



