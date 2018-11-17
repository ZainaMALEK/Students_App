
const studentsDisplay = document.querySelector('#students');

//afficher les étudiants
function getStudents() {
    let url = 'process/display_students.php';
    fetch(url)
      .then(res => res.json())
      .then(students => {

        let html = '<ul>';
        students.forEach(student => {
          html += '<li><a href="student_info.php?id='+ student.id +'">'+ student.firstname + ' ' + student.lastname +'</a></li>';
        })
        html += '</ul>';
        studentsDisplay.innerHTML = html;

      })
  }



getStudents();
