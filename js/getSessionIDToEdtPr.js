//get the id from the the table and send to the trainer personal update form
$(".btnEditPer").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $id = $row.find(".id").text(); // Find the text
  window.location.href = "trainer_session_personal_edit.php?id=" + $id ;
});
