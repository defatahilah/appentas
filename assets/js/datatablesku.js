$(document).ready(function () {
  $('#dataTable').DataTable({

    scrollX: true,
    scrollCollapse: true,
    paging: true,


    fixedColumns: {
      leftColumns: 3,
      rightColumns: 1
    }
  });
});