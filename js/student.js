const studentDisplay = document.querySelector('#studentDisplay');
const student = document.querySelector('#student');

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

      getStudentInfo();
