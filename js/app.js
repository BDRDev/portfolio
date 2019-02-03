function projectDimensions() {

    console.log("PROJECT DIMENSIONS");
    let pageWidth = $(window).width();
    //console.log("Page Width: " + pageWidth);

    if(pageWidth >= 1500) {
        //console.log("greater than 800");

        let projectWidth = Math.floor(pageWidth / 4) - .5;
        //console.log("Width: " + projectWidth);

        let projectHeight = (projectWidth * .80);

        //projectWidth = projectWidth + "px";

        $(".project").css({
            "width": projectWidth,
            "height": projectHeight
        });

    } else if(pageWidth <1499 && pageWidth > 1200) {
        //console.log("between 800 and 500");
        let projectWidth = Math.floor(pageWidth / 3) - .5;
        //console.log("Width: " + projectWidth);

        let projectHeight = (projectWidth * .80);

        //projectWidth = projectWidth + "px";

        $(".project").css({
            "width": projectWidth,
            "height": projectHeight
        });
    } else if(pageWidth <1199 && pageWidth > 660) {
        //console.log("between 800 and 500");
        let projectWidth = Math.floor(pageWidth / 2) - .5;
        //console.log("Width: " + projectWidth);

        let projectHeight = (projectWidth * .80);

        //projectWidth = projectWidth + "px";

        $(".project").css({
            "width": projectWidth,
            "height": projectHeight
        });
    } else if(pageWidth <= 659) {
        //console.log("less than 500");
        let projectWidth = Math.floor(pageWidth / 1) - .5;
        //console.log("Width: " + projectWidth);

        let projectHeight = (projectWidth * .80);

        //projectWidth = projectWidth + "px";

        $(".project").css({
            "width": projectWidth,
            "height": projectHeight
        });
    }
} //end projectDimensions

$( document ).ready(function() {


    projectDimensions();

    $(window).resize(function() {
        projectDimensions();
    });


    console.log( "ready!" );

    let href = document.location.href;
    let lastPathSegment = href.substr(href.lastIndexOf('/') + 1);
    //console.log(lastPathSegment);

    let pageName = lastPathSegment.substring(0, lastPathSegment.indexOf('.'));

    //console.log(pageName);

    let changeStr = "#" + pageName + "Selection";

    //console.log(changeStr);

    $(changeStr).css("background-color", "white");

    if(pageName === "contact") {
        console.log("YUUUUP");

        $("#footerTop").css({
            "display": "none"
        });

        $("#footerBot").css({
            "margin-top": "20px"
        });

    } else {
        console.log("NOOOOOPE")
    }


    $(".navSection").mouseenter(function() {

        let sectionString = this.id;

        let strID = sectionString.substring(0, sectionString.indexOf('S'));

        //console.log(strID);

        let changeStr = "#" + strID + "Selection";

        //console.log(changeStr);

        $(changeStr).css("background-color", "white");
    }).mouseleave(function() {

        let sectionString = this.id;

        let strID = sectionString.substring(0, sectionString.indexOf('S'));

        //console.log(strID);

        let changeStr = "#" + strID + "Selection";

        //console.log(changeStr);

        if(strID === pageName) {
            //console.log("the same");
        } else {
            $(changeStr).css("background-color", "#286da8");
        }



    });

    projectDimensions();

    let numProjects = $('.project').length;

    console.log(numProjects);

    $('.project').each(function() {
        console.log(this.id);

        $('.description').hide();
    });

    $(".project").mouseenter(function() {
        console.log("hovering over a project")
        //console.log(this.id);

        let description = this.id;

        description = "." + description;

        console.log(description)

        $(description).slideToggle('slow');

    }).mouseleave(function() {
        let description = this.id;

        description = "." + description;

        console.log(description);

        $(description).slideToggle('slow');
    });

    $("#footerTop").mouseenter(function() {
        console.log("entered");

        $("#chevron").css({
            "background-color": "#1c4c75",
            "transform": "rotate(-90deg)"
        });
    }).mouseleave(function() {
        console.log("left");

        $("#chevron").css({
            "background-color": "#ffffff",
            "transform": "rotate(0deg)"
        });
    });
});













