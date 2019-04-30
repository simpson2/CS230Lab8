//NOTE: .htaccess used to rewrite api URLs
//into more readable URLs
//for client consumption

$(document).ready(function () {
    $("#createEntry").submit(function (e) {
        //prevent button from reloading page
        e.preventDefault();

        //convert submitted form data into required JSON format
        //for client<->API<->server communication
        var arr = $("#createEntry").serializeArray();
        var json = {};
        $.each(arr, function () {
            json[this.name] = this.value;
        });
        json = JSON.stringify(json);

        $.ajax({
            type: "POST",
            url: "http://localhost/Lab8/service/ops/create",
            data: { input : json },
            success: function (res) {
                alert("201: "+JSON.stringify(res));
            },
            error: function (xhr, status, err) {
                alert(xhr.status + ': ' + xhr.statusText);
            },
        });
    });


    $("#updateName").submit(function(e) {
        //prevent button from reloading page
        e.preventDefault();

        //convert submitted form data into required JSON format
        //for client<->API<->server communication
        var arr = $("#updateName").serializeArray();
        var json = {};
        $.each(arr, function() {
            json[this.name] = this.value;
        });
        json = JSON.stringify(json);

        $.ajax({
            type: "POST",
            url: "http://localhost/Lab8/service/ops/updateName",
            data: { input : json },
            success: function(res) {
                alert("200: "+JSON.stringify(res));
            },
            error: function(xhr, status, err) {
                alert(xhr.status + " :" + xhr.statusText);
            }
        });
    });


    $("#updateURL").submit(function(e) {
        //prevent button from reloading page
        e.preventDefault();

        //convert submitted form data into required JSON format
        //for client<->API<->server communication
        var arr = $("#updateURL").serializeArray();
        var json = {};
        $.each(arr, function() {
            json[this.name] = this.value;
        });
        json = JSON.stringify(json);

        $.ajax({
            type: "POST",
            url: "http://localhost/Lab8/service/ops/updateURL",
            data: { input : json },
            success: function(res) {
                alert("200: "+JSON.stringify(res));
            },
            error: function(xhr, status, err) {
                alert(xhr.status + " :" + xhr.statusText);
            }
        });
    });


    $("#updateDesc").submit(function(e) {
        //prevent button from reloading page
        e.preventDefault();

        //convert submitted form data into required JSON format
        //for client<->API<->server communication
        var arr = $("#updateDesc").serializeArray();
        var json = {};
        $.each(arr, function() {
            json[this.name] = this.value;
        });
        json = JSON.stringify(json);

        $.ajax({
            type: "POST",
            url: "http://localhost/Lab8/service/ops/updateDesc",
            data: { input : json },
            success: function(res) {
                alert("200: "+JSON.stringify(res));
            },
            error: function(xhr, status, err) {
                alert(xhr.status + " :" + xhr.statusText);
            }
        });
    });


    $("#searchByID").submit(function (e) {
        //prevent button from reloading page
        e.preventDefault();

        var ID = $("#rId").val();

        $.ajax({
            type: "GET",
            url: "http://localhost/Lab8/service/ops/retrieveID/" + ID,
            success: function (res) {
                
                //fetch result JSON and parse data
                //to be returned to user in table format
                var table = "<table><tr><th>ID</th><th>Date</th><th>Name</th><th>URL</th><th>Description</th></tr>";
                
                table += "<tr>"
                table += "<td>" + res["ID"] + "</td>";
                table += "<td>" + res["Date"] + "</td>";
                table += "<td>" + res["Name"] + "</td>";
                table += "<td>" + res["URL"] + "</td>";
                table += "<td>" + res["Description"] + "</td>";
                table += "</tr></table>";

                $("#retrieveTable").html(table);
            },
            error: function (xhr, status, err) {

                var table = "<table><tr><th>ID</th><th>Date</th><th>Name</th><th>URL</th><th>Description</th></tr>";
                
                table += "<tr>"
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";

                table += "</tr></table>";
                $("#retrieveTable").html(table);
            }
        });
    });


    $("#searchByName").submit(function (e) {
        //prevent button from reloading page
        e.preventDefault();

        var Name = $("#rName").val();

        $.ajax({
            type: "GET",
            url: "http://localhost/Lab8/service/ops/retrieveName/" + Name,
            success: function (res) {

                //fetch result JSON and parse data
                //to be returned to user in table format
                var table = "<table><tr><th>ID</th><th>Date</th><th>Name</th><th>URL</th><th>Description</th></tr>";
                
                table += "<tr>"
                table += "<td>" + res["ID"] + "</td>";
                table += "<td>" + res["Date"] + "</td>";
                table += "<td>" + res["Name"] + "</td>";
                table += "<td>" + res["URL"] + "</td>";
                table += "<td>" + res["Description"] + "</td>";

                table += "</tr></table>";
                $("#retrieveTable").html(table);
            },
            error: function (xhr, status, err) {

                var table = "<table><tr><th>ID</th><th>Date</th><th>Name</th><th>URL</th><th>Description</th></tr>";
                
                table += "<tr>"
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";
                table += "<td>" + "No Record" + "</td>";

                table += "</tr></table>";
                $("#retrieveTable").html(table);
            }
        });
    });


    $("#deleteEntry").submit(function(e) {
        //prevent button from reloading page
        e.preventDefault();

        //convert submitted form data into required JSON format
        //for client<->API<->server communication
        var arr = $("#deleteEntry").serializeArray();
        var json = {};
        $.each(arr, function() {
            json[this.name] = this.value;
        });
        json = JSON.stringify(json);

        $.ajax({
            type: "POST",
            url: "http://localhost/Lab8/service/ops/delete",
            data: { input : json },
            success: function(res) {
                alert("200: "+JSON.stringify(res));
            },
            error: function(xhr, status, err) {
                alert(xhr.status + ": " + xhr.statusText);
            }
        });
    });
});