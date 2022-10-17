function clipboard() {
    /* Get the text field */
    var copyText = document.querySelector('.'+this.getAttribute("data-url"));

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
}
document.querySelectorAll(".copy-link-btn").forEach( link => {
    link.addEventListener("click", function(){
        /* Get the text field */
        var copyText = link.previousElementSibling;
    
        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
    
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
    
        /* Alert the copied text */
        // alert("Copied the text: " + copyText.value);
    });
});