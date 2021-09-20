<section  class="text-dark py-5 bg-success">
    <div class="container">
        <div class="row">

           <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Top Question and Answers
                </div>
                <div class="card-body">
                    <table id="questiontableid" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">QuestionBy</th>
                                <th class="th-sm">Catagory</th>
                                <th class="th-sm">Question?</th>
                                <th class="th-sm">Answer</th>
                            </tr>
                        </thead>
                        <tbody id="question_table">


                        </tbody>
                    </table>

                </div>
            </div>
           </div>

        </div>
    </div>
</section>

@section('script')
<script type="text/javascript">
getquestiondata()

function getquestiondata() {
    axios.get('/getquestionData')
        .then(function(response) {
           if(response.status==200){
            var jsonData = response.data;
            $.each(jsonData, function(i, item) {
                $('<tr>').html(
                    "<td>" + jsonData[i].name + "</td>" +
                    "<td>" + jsonData[i].catagory + " </td>" +
                    "<td>" + jsonData[i].question + " </td>" +
                    "<td>" + jsonData[i].answer + " </td>"

                ).appendTo('#question_table')
            });


            $('#questiontableid').DataTable()


           }else{
            alert("error");
           }
        })
        .catch(function(error) {})
}
</script>

@endsection
