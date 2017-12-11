

//TweenMax.fromTo([".background-image"], .5, {opacity: 0}, {opacity: 1, delay: 1});

TweenMax.fromTo(["header"], 2, {"margin-left": "-150%"}, {"margin-left": 0, delay: 2});
TweenMax.fromTo(["footer"], 2, {"margin-right": "-150%"}, {"margin-right": 0, delay: 2});

TweenMax.fromTo([".handle"], 1, {"left": "150%"}, {"left": "80%", delay: 4});

// $(".title").waypoint(function () {
// 	$('.title').toggleClass('active');
// }, {
// 	offset: '80%'
// })

// $(".title").waypoint(function () {
// 	TweenMax.fromTo([".about-section"], 2, {rotationY: 90, delay: 2}, {rotationY: 0, delay: 1});
// }, {
// 	offset: '80%'
// })


