$("document").ready(function () {
    var $filterTable = $("#filterTable");
    var $dataIndex = $("#filterTable").data("index");

    if ($filterTable.length > 0) {
        $filterTable.dataTable({
            lengthChange: true,
            searching: true,
            buttons: ["copy", "excel", "pdf"]
        });

        //Get a reference to the new datatable
        var table = $('#filterTable').DataTable();

        //Take the category filter drop down and append it to the datatables_filter div.
        //You can use this same idea to move the filter anywhere withing the datatable that you want.
        $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));

        //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
        //This tells datatables what column to filter on when a user selects a value from the dropdown.
        //It's important that the text used here (Category) is the same for used in the header of the column to filter
        // var categoryIndex = 1;
        $("#filterTable th").each(function (i) {
            if ($($(this)).html() == "Name") {
                $dataIndex = i; return false;
            }
        });

        //Use the built in datatables API to filter the existing rows by the Category column
        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var selectedItem = $('#categoryFilter').val()
                var category = data[$dataIndex];
                if (selectedItem === "" || category.includes(selectedItem)) {
                    return true;
                }
                return false;
            }
        );

        //Set the change event for the Category Filter dropdown to redraw the datatable each time
        //a user selects a new filter.
        $("#categoryFilter").change(function (e) {
            table.draw();
        });

        table.draw();
    }
});
