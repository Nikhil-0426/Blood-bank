    $(document).ready(function () {
    // Send Search Text to the server
    $("#search").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "action.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#view-list").html(response);
          },
        });
      } else {
        $("#view-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#search").val($(this).text());
      $("#view-list").html("");
    });
  });