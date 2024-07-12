function adjustStyles() {
    const logo = document.querySelectorAll("#logo img");
    const nav = document.querySelectorAll("#navbar");
    const navLinks = document.querySelectorAll("#navbar a");
    const userActions = document.querySelectorAll("#userImg");
    const button = document.querySelectorAll("#button");
    const gridIcons = document.querySelectorAll("#gridIcons");
    const gridCourses = document.querySelectorAll("#gridCourses");
    const textContainer = document.querySelectorAll("#text-container");
    const textP = document.querySelectorAll("#textP");
    const textH1 = document.querySelectorAll("#textH1");
    const dadosContainer = document.querySelectorAll("#dadosContainer");
    const childImage = document.querySelectorAll("#childrenImage");
    const overlay = document.querySelectorAll("#overlay");

    const divContent = document.querySelectorAll("#divContent");
    const quebraCabecaImage = document.querySelectorAll("#quebraCabecaImage");
    const abc = document.querySelectorAll("#abc");
    const abcImage = document.querySelectorAll("#abcImage");

    const screenWidth = window.innerWidth;

    // Headers
    if (screenWidth >= 767 && screenWidth <= 870) {
        button.forEach((props) => {
            props.classList.add("hidden");
        });
    } else {
        button.forEach((props) => {
            props.classList.remove("hidden");
        });
    }
    if (screenWidth > 767 && screenWidth <= 1470) {
    } else {
        userActions.forEach((link) => {
            link.classList.remove("h-8");
            link.classList.add("h-12");
        });
    }
    if (screenWidth > 767 && screenWidth <= 1470) {
        logo.forEach((props) => {
            props.classList.remove("pl-5", "pr-7", "pb-2", "pt-1");
            props.classList.add("pl-1", "pr-5", "pb-3", "pt-2", "h-12");
        });
        nav.forEach((props) => {
            props.classList.remove("gap-14");
        });
        navLinks.forEach((props) => {
            props.classList.remove("text-2xl");
            props.classList.add("text-lg");
        });
        userActions.forEach((link) => {
            link.classList.remove("h-12");
            link.classList.add("h-10");
        });
        button.forEach((props) => {
            props.classList.remove("text-xl", "px-4", "py-2");
            props.classList.add("text-base", "p-h");
        });
    } else {
        logo.forEach((props) => {
            props.classList.remove("pl-1", "pr-5", "pb-3", "pt-2", "h-12");
            props.classList.add("pl-5", "pr-7", "pb-2", "pt-1");
        });
        nav.forEach((props) => {
            props.classList.add("gap-14");
        });
        navLinks.forEach((props) => {
            props.classList.remove("text-lg");
            props.classList.add("text-2xl");
        });
        userActions.forEach((link) => {
            link.classList.remove("h-10");
            link.classList.add("h-12");
        });
        button.forEach((props) => {
            props.classList.remove("text-base", "p-h");
            props.classList.add("text-xl", "px-4", "py-2");
        });
    }

    // IconsCard - Purple
    if (screenWidth <= 1170) {
        gridIcons.forEach((props) => {
            props.classList.remove("md:grid-cols-3");
            props.classList.add("md:grid-cols-1");
        });
    } else {
        gridIcons.forEach((props) => {
            props.classList.remove("md:grid-cols-1");
            props.classList.add("md:grid-cols-3");
        });
    }

    //AboutUs - Purple
    if (screenWidth > 767 && screenWidth <= 1340) {
        textContainer.forEach((props) => {
            props.classList.remove("md:pt-52", "md:ml-28", "md:text-2xl");
            props.classList.add("md:pt-10", "md:ml-10", "md:text-");
        });
        textP.forEach((props) => {
            props.classList.remove("md:text-2xl");
            props.classList.add("md:text-xl");
        });
        textH1.forEach((props) => {
            props.classList.remove("md:text-3xl");
            props.classList.add("md:text-2xl");
        });
    } else {
        textContainer.forEach((props) => {
            props.classList.remove("md:pt-10", "md:ml-10", "md:text-lg");
            props.classList.add("md:pt-52", "md:ml-28", "md:text-2xl");
        });
        textP.forEach((props) => {
            props.classList.remove("md:text-xl");
            props.classList.add("md:text-2xl");
        });
        textH1.forEach((props) => {
            props.classList.remove("md:text-2xl");
            props.classList.add("md:text-3xl");
        });
    }

    if (screenWidth < 1400) {
        dadosContainer.forEach((props) => {
            props.classList.remove("w-container");
            props.classList.add("w-dados");
        });
    } else {
        dadosContainer.forEach((props) => {
            props.classList.remove("w-dados");
            props.classList.add("w-container");
        });
    }

    // Courses - Purple
    if (screenWidth > 767 && screenWidth <= 1070) {
        gridCourses.forEach((props) => {
            props.classList.remove("md:grid-cols-3");
            props.classList.add("md:grid-cols-2");
        });
    } else {
        gridCourses.forEach((props) => {
            props.classList.remove("md:grid-cols-2");
            props.classList.add("md:grid-cols-3");
        });
    }

    // Index - Purple

    if (screenWidth <= 1100) {
        quebraCabecaImage.forEach((props) => {
            props.classList.remove("h-64");
            props.classList.add("h-44");
        });
        abcImage.forEach((props) => {
            props.classList.remove("h-48");
            props.classList.add("h-44");
        });
    } else {
        quebraCabecaImage.forEach((props) => {
            props.classList.remove("h-44");
            props.classList.add("h-64");
        });
        abcImage.forEach((props) => {
            props.classList.remove("h-44");
            props.classList.add("h-48");
        });
    }

    if (screenWidth < 1260) {
        childImage.forEach((props) => {
            props.classList.remove("md:flex");
            props.classList.add("hidden");
        });
        overlay.forEach((props) => {
            props.classList.remove("md:left-36", "md:top-32");
            props.classList.add(
                "inset-x-0",
                "top-1/2",
                "transform",
                "-translate-y-1/2"
            );
        });
    } else {
        childImage.forEach((props) => {
            props.classList.remove("hidden");
            props.classList.add("md:flex");
        });
        overlay.forEach((props) => {
            props.classList.remove(
                "inset-x-0",
                "top-1/2",
                "transform",
                "-translate-y-1/2"
            );
            props.classList.add("md:left-36", "md:top-32");
        });
    }
}

adjustStyles();
window.addEventListener("resize", adjustStyles);
