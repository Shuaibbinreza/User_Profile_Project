var subjectObject = {
    "PSC/5 Pass": ["PSC","Ebtadaye", "5 Pass", "Others"],
    "JSC/JDC/8 Pass": ["JSC", "JDC", "8 Pass", "Others"],
    "Secondary": ["SSC", "O-Level", "Dakhil(Madrasa)", "SSC (Vocational)", "Others"],
    "Higher Secondary": ["HSC", "A-Level", "Alim(Madrasa)", "HSC (Vocational)", "HSC (BMT)", "Others"],
    "Diploma": ["Diploma in Engineering", "PGT", "Diploma in Automation", "Others"],
    "Bacchelor/Honours": ["Bachellor of Science (BSc)", "Bachelor of Arts (BA)", "Others"],
    "Masters": ["MSc", "MA", "MBA", "Others"],
    "PhD (Doctor of Philosophy)": ["HTML", "CSS", "JavaScript"],
}
window.onload = function() {
    var subjectSel = document.getElementById("education_level");
    var techSel = document.getElementById("education_title");
    var resultType = document.getElementById("resulttype");
    var marksField = document.getElementById("marksfield");
    
    // Populate subjects dropdown
    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    
    // On subject change, update techs dropdown
    subjectSel.onchange = function() {
        // Empty techs dropdown
        techSel.length = 1;
        // Get selected subject
        var techs = subjectObject[this.value];
        // Populate techs dropdown
        for (var i = 0; i < techs.length; i++) {
            techSel.options[techSel.options.length] = new Option(techs[i], techs[i]);
        }
    }

    // Add event listener for resulttype dropdown
    // document.getElementById("grades").addEventListener("change", function() {
    //     var selectedValue = this.value; // Get the selected value from the dropdown
    //     var divElement = document.getElementById("myDiv"); // Get the div element
        
    //     // Update the display style based on the selected value
    //     divElement.style.display = selectedValue;
    // });

    document.getElementById("resulttype").addEventListener("change", function() {
        var selectedValue = this.value; // Get the selected value from the dropdown
        var divElement = document.getElementById("myDiv"); // Get the div element
        
        // Update the display style based on the selected value
        divElement.style.display = selectedValue;
    });
}