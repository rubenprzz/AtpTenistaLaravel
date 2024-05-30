import './bootstrap';
//Operation
const operation = (type) => {
    switch (type){
        case "nav":
            animator("ham");
            $("menu").css("right") >= "0px" ? $("menu").css("right","-100%") : $("menu").css("right", "0px");
            overlay();
            break;
    }
}


//Overlay
const overlay = (no) => {
    if (no == 1){
        operation("nav");
    } else {
        $(".overlay").length > 0 ? $(".overlay").remove() : $("body").append('<div class="overlay" onclick="overlay(1)"></div>');
    }
}


//Animator
const animator = (elem) => {
    switch (elem){
        case "ham":
            let class_name = elem+"_animator";
            $("."+elem).hasClass(class_name) ? $("."+elem).removeClass(elem+"_animator") : $("."+elem).addClass(class_name);
            break;
    }
}
