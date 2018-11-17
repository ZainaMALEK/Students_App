
const studentsDisplay = document.querySelector('#students');

function getStudents() {
    let url = 'process/display_student.php';
    fetch(url)
      .then(res => res.json())
      .then(students => {

        let html = '<ul>';
        students.forEach(student => {
          html += '<li><a href="">'+ student.firstname + ' ' + student.lastname +'</a></li>';
        })
        html += '</ul>';
        studentsDisplay.innerHTML = html;

      })
  }
getStudents();
