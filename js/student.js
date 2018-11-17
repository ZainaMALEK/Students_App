const studentDisplay = document.querySelector('#studentDisplay');
const student = document.querySelector('#student');

console.log (student.dataset.id);


  //Afficher un étudiant
  function getStudent() {
      let url = 'process/display_student.php?id='+ student.dataset.id;
      fetch(url)
        .then(res => res.json())
        .then(student => {

          studentDisplay.innerHTML = student.firstname+' '+student.lastname ;

        })
    }

    getStudent();
