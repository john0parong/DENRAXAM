var id, option, dir_path;
dir_path = "../process/employee/crud.php";
$(document).ready(function () {
  option = 1;
  //========= START - DATATABLE ===========================================
  var dTable = $("#dataTable").DataTable({
    columnDefs: [
      { orderable: false, targets: [3] },
      { width: "50px", targets: [3] },
      { width: "15%", targets: [2] },
      { className: "text-center", targets: [0, 1, 2, 3]}
    ],
    order: [[0, "asc"]],
    autoWidth: false,
    ajax: {
      url: dir_path,
      method: "POST",
      data: { option: option },
      dataSrc: ""
    },
    columns: [
      { data: "firstname" },
      { data: "lastname" },
      {
        data: "isactive",
        render: function (data) {
          if (data == "1") {
            return '<span class="badge text-dark badge-info p-1 px-2">ACTIVE</span>';
          } else if (data == "0") {
            return '<span class="badge text-dark badge-warning p-1 px-1">INACTIVE</span>';
          }
        }
      },
      {
        sortable: false,
        data: "id",
        render: function (data) {
          return '<div class="btn-group">'+
                    '<button value="' + data + '" class="btn mx-1 btn-update btn-outline-success border-0 btn-sm" data-toggle="tooltip" data-placement="bottom" title="Update">'+
                      '<i class="fas fa-edit"></i>'+
                    '</button>'+
                    '<button value="' + data + '" class="btn btn-delete mx-1 btn-outline-danger border-0 btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete">'+
                      '<i class="fas fa-trash"></i>'+
                    '</button>'+
                  '</div>';
        }
      }
    ]
  });

  //========= END - DATATABLE =========================================== */
  $(document).on("click", ".btn-insert", function(e){
    option = 2;
    var mmodal = '.crud-modal';
    var mform = '#crud-form';
    var mmf = mmodal +" "+ mform;
    $(mform).trigger("reset");
    $(mform).unbind();
    $(mmodal+" "+".modal-title").text("Add Employee");
    $(mmodal).modal("show");
    $(mmf).submit(function(e){
      e.preventDefault();
      firstname = $.trim($('#firstname').val());
      lastname = $.trim($('#lastname').val());
      var formData = new FormData();
      formData.append('firstname', firstname);
      formData.append('lastname', lastname);
      formData.append('option', option);
      $.ajax({
        url: dir_path,
        type: "POST",
        datatype:"json",    
        processData: false,
        contentType: false,
        data: formData,    
        success: function(){
          dTable.ajax.reload(null, false);
          $(mmodal).modal("hide");
        }
      });
    });
  });

  $(document).on("click", ".btn-update", function(e){
    id = $(this).val();
    var mmodal = '.crud-modal';
    var mform = '#crud-form';
    var mmf = mmodal +" "+ mform;
    $(mform).trigger("reset");
    $(mform).unbind();
    $(mmodal+" "+".modal-title").text("Update Employee");
    $(mmodal).modal("show");
    option = 4;
    $.ajax({
      url: dir_path,
      type: "POST",
      datatype: "json",
      data: { option: option, id: id },
      success: function (response) {
        data = JSON.parse(response);
        data = data[0];
        $(mmodal+" "+"#firstname").val(data.firstname).text();
        $(mmodal+" "+"#lastname").val(data.lastname).text()
      }
    });

    $(mmf).submit(function(e){
      e.preventDefault();
      option = 3;
      firstname = $.trim($('#firstname').val());
      lastname = $.trim($('#lastname').val());
      var formData = new FormData();
      formData.append('option', option);
      formData.append('id', id);
      formData.append('firstname', firstname);
      formData.append('lastname', lastname);
      $.ajax({
        url: dir_path,
        type: "POST",
        datatype:"json",    
        processData: false,
        contentType: false,
        data: formData,      
        success: function(){
          dTable.ajax.reload(null, false);
          $(mmodal).modal("hide");
        }
      });
    });
  });

  $(document).on("click", ".btn-delete", function(e){
    option = 5;
    id = $(this).val();
    $.ajax({
      url: dir_path,
      type: "POST",
      datatype:"json",    
      data:  {option:option, id:id},    
      success: function(){
        dTable.ajax.reload(null, false);
      }
    });
  });
});