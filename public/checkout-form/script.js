$(document).ready(function() {

// image upload
var uprog = {
    // (A) INIT
    hBar : null,     // html progress bar
    hPercent : null, // html upload percentage
    hFile : null,    // html file picker
    init : () => {
        
      // (A1) GET HTML ELEMENTS
      uprog.hBar = document.getElementById("up-bar");
      uprog.hPercent = document.getElementById("up-percent");
      uprog.hFile = document.getElementById("up-file");
  
      // (A2) ATTACH AJAX UPLOAD + ENABLE UPLOAD
      uprog.hFile.onchange = uprog.upload;
      uprog.hFile.disabled = false;
    },
  
    // (B) HELPER - UPDATE PROGRESS BAR
    update : (percent) => {
      percent = percent + "%";
      uprog.hBar.style.width = percent;
      uprog.hPercent.innerHTML = percent;
      if (percent == "100%") { uprog.hFile.disabled = false;}
    },
  
    // (C) PROCESS UPLOAD
    upload : async () => {
        $('#update_progressbar').show();
      // (C1) GET FILE + UPDATE HTML INTERFACE
      let file = uprog.hFile.files[0];
      uprog.hFile.disabled = true; // disable upload button
      uprog.hFile.value = ""; // reset file picker
  
      // DUMMY UPLOAD DEMO
      await new Promise(e=>{setTimeout(e,500)});
      uprog.update(25);
      await new Promise(e=>{setTimeout(e,500)});
      uprog.update(50);
      await new Promise(e=>{setTimeout(e,500)});
      uprog.update(75);
      await new Promise(e=>{setTimeout(e,500)});
      uprog.update(100);
      
    }
  };
  window.addEventListener("load", uprog.init);
  
         




    //DOM elements
    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next'
    };

    //remove class from a set of items
    const removeClasses = (elemSet, className) => {

        elemSet.forEach(elem => {

            elem.classList.remove(className);

        });

    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {

        let currentNode = elem;

        while (!(currentNode.classList.contains(parentClass))) {
            currentNode = currentNode.parentNode;
        }

        return currentNode;

    };

    //get active button step number
    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = (activeStepNum) => {

        //remove active state from all the state
        removeClasses(DOMstrings.stepsBtns, 'js-active');

        //set picked items to active
        DOMstrings.stepsBtns.forEach((elem, index) => {
            if (index <= (activeStepNum)) {
                elem.classList.add('js-active');
            }

        });
    };

    //get active panel
    const getActivePanel = () => {

        let activePanel;

        DOMstrings.stepFormPanels.forEach(elem => {

            if (elem.classList.contains('js-active')) {

                activePanel = elem;

            }

        });

        return activePanel;

    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {

        //remove active class from all the panels
        removeClasses(DOMstrings.stepFormPanels, 'js-active');

        //show active panel
        DOMstrings.stepFormPanels.forEach((elem, index) => {
            if (index === (activePanelNum)) {

                elem.classList.add('js-active');

                setFormHeight(elem);

            }
        })

    };

    //set form height equal to current panel height
    const formHeight = (activePanel) => {

        const activePanelHeight = activePanel.offsetHeight;


        DOMstrings.stepsForm.style.height = `${activePanelHeight+200}px`;

    };

    const setFormHeight = () => {
        const activePanel = getActivePanel();

        formHeight(activePanel);
    }

    //STEPS BAR CLICK FUNCTION
    let toggle = true

    let fileName;

    $('#up-file').change(function(e){
        fileName = e.target.files[0].name;
    });
   
    DOMstrings.stepsBar.addEventListener('click', e => {

        //check if click target is a step button
        const eventTarget = e.target;

        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
            return;
        }

        //get active button step number
        const activeStep = getActiveStep(eventTarget);

        //set all steps before clicked (and clicked too) to active
        setActiveStep(activeStep);

            let regexEmail = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;
                let emailAddress = $('#email').val();
                
  
               
            
        if ($('#fName').val() == '') {
            $('#fName-error').show()
            return false
        } else if ($('#lName').val() == '') {
            $('#lName-error').show()
            return false
        } else if ($('#email').val() == '') {
            $('#email-error').show()
            return false
        }  else if (!emailAddress.match(regexEmail)) {
             alert('Invalid Email')
            return false
        }
        else {
            if (toggle) {
                setActivePanel(activeStep);
            }
            toggle = false
        }
        
     

        if ($('#translateFrom').val() == '') {
            $('#translateFrom-error').show()
            return false
        } else if ($('#translateTo').val() == '') {
            $('#translateTo-error').show()
            return false
        } else if ($('.page__count input').val() == '') {
            $('#pageCount-error').show()
            return false
        } else if(fileName == undefined){
            alert('File required');
            return false;
        }
        else {
            setActivePanel(activeStep);
            toggle = true
        }

    });

    //PREV/NEXT BTNS CLICK
    let toggleForm = true;
    DOMstrings.stepsForm.addEventListener('click', e => {

        const eventTarget = e.target;

        //check if we clicked on `PREV` or NEXT` buttons
        if (!((eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) || (eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))) {
            return;
        }

        //find active panel
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

        //set active step and active panel onclick
        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;

        } else {

            activePanelNum++;

        }
        
        



        setActiveStep(activePanelNum);
        
            let regexEmail = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;
                let emailAddress = $('#email').val();
        if ($('#fName').val() == '') {
            $('#fName-error').show()
            return false
        } else if ($('#lName').val() == '') {
            $('#lName-error').show()
            return false
        } else if ($('#email').val() == '') {
            $('#email-error').show()
            return false
        }else if (!emailAddress.match(regexEmail)) {
             alert('Invalid Email')
            return false
        } 
        else {
            if (toggleForm) {
                setActivePanel(activePanelNum);
            }
            toggleForm = false
        }

        if ($('#translateFrom').val() == '') {
            $('#translateFrom-error').show()
            return false
        } else if ($('#translateTo').val() == '') {
            $('#translateTo-error').show()
            return false
        } else if ($('.page__count input').val() == '') {
            $('#pageCount-error').show()
            return false
        } else if(fileName == undefined){
            alert('File required');
            return false;
        }
        else {
            setActivePanel(activePanelNum);
            toggleForm = true
        }

    });

    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);

    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);

    //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

    const setAnimationType = (newType) => {
        DOMstrings.stepFormPanels.forEach(elem => {
            elem.dataset.animation = newType;
        })
    };

    //selector onchange - changing animation
    const animationSelect = document.querySelector('.pick-animation__select');

    //   animationSelect.addEventListener('change', () => {
    //       // const newAnimationType = animationSelect.value;
    //       const newAnimationType = 'slideHorz';
    //       setAnimationType(newAnimationType);
    //   });


});





