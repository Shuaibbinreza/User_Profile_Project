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
    var years = document.getElementById("yearOFpassing");    
    const currentYear = new Date().getFullYear();

    for (let i = currentYear; i > 2000; i--) {
        years.options[years.options.length] = new Option(i, i);
    }

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

    document.getElementById("resulttype").addEventListener("change", function() {
        var selectedValue = this.value; // Get the selected value from the dropdown
        var marks = document.getElementById("marksDiv"); // Get the div element
        var cgpa = document.getElementById("cgpaDiv"); // Get the div element
        
        // Update the display style based on the selected value
        if(selectedValue === 'FirstDiv'){
            marks.style.display = 'block';
            cgpa.style.display = 'none';
            // disableFormElementsInDiv('resscale');
            document.getElementById("resscale").style.display = 'none';
        }
        else if(selectedValue === 'Grade'){
            marks.style.display = 'none';
            cgpa.style.display = 'block';
            document.getElementById("resscale").style.display = 'block';
        }
        else{
            marks.style.display = 'none';
            cgpa.style.display = 'none';
            document.getElementById("resscale").style.display = 'none';
        }
    });
    
    // Degree Relation
    document.getElementById("education_level").addEventListener("change", function() {
        var selectedValue = this.value; // Get the selected value from the dropdown
        var marks1 = document.getElementById("boardDiv"); // Get the div element
        
        // Update the display style based on the selected value
        if(selectedValue === 'PhD (Doctor of Philosophy)' ||
            selectedValue === 'Masters' ||
            selectedValue === 'Bacchelor/Honours'){
            marks1.style.display = 'none';
        }
        else{
            marks1.style.display = 'block';
        }
    });
}