'use strict';

function countdown(event) {
    $(this).find(".days").text(event.strftime('%D'));
    $(this).find(".hours").text(event.strftime('%H'));
    $(this).find(".min").text(event.strftime(' %M'));
    $(this).find(".sec").text(event.strftime('%S'));
}

var ouverture = $("#counter");
var beta = $("#counter2");
ouverture.countdown(ouverture.data('date'), countdown);
beta.countdown(beta.data('date'), countdown);

function FluffyKittenMaker(SomeNumberThing) {
    document.body.style.opacity = SomeNumberThing / 100;
}

function Conflaburator(SomeNumberThing) {
    if (SomeNumberThing <= 100) {
        FluffyKittenMaker(SomeNumberThing);
        SomeNumberThing += 10;
        window.setTimeout("Conflaburator("+SomeNumberThing+")", 50);
    }
}

FluffyKittenMaker(0);
Conflaburator(0);
