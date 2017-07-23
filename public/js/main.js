'use strict';

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
