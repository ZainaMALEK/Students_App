const studentDisplay = document.querySelector('#studentDisplay');
const student = document.querySelector('#student');
const subjects = document.querySelector('#subjects');
const addMarkBtn = document.querySelector('#addMarkBtn');


//console.log (student.dataset.id);


    function getStudentInfo() {
        let url = 'process/display_student.php?id='+ student.dataset.id;
        fetch(url)
          .then(res => res.json())
          .then(studentInfos => {

            student.innerHTML = studentInfos[0].firstname +' '+studentInfos[0].lastname ;
            let html = '<tr>';

            studentInfos.forEach(studentInfo => {
              html += '<tr>'
              html += '<td>' + studentInfo.topic + '</td>';
              html += '<td>' + studentInfo.mark + '</td>';
              html += '</tr>';
            })
            studentDisplay.innerHTML = html ;

          })
      }

//Afficher la liste select des matières d'examen
      function getExamList() {
          let url = 'process/get_exams.php';
          fetch(url)
            .then(res => res.json())
            .then(exams => {

              let html = '';

              exams.forEach(exam => {

                html += '<option>' + exam.topic + '</option>';
                console.log(exam.topic);

              })

              subjects.innerHTML = html ;

            })
        }

        getExamList();

        getStudentInfo();
