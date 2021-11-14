<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, html {height: 100%}
    .bgimg {
        background-image: url('https://www.w3schools.com/w3images/onepage_restaurant.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>
<body class="bgimg w3-text-white">
<!--<div class="w3-container" id="content"></div>-->
<h3 style="text-align:center;">List Street</h3>
<form action="/AssignmentDW/searchStreet.php" method="post" name="searchForm">
    <input name="keyword" id="keyword" type="text" placeholder="Search by name street..">

    <select name="flitter_district" id="flitter_district" >
    </select>

    <button type="submit">Search</button>
    <button type="button"><a href="/AssignmentDW/formCity.php">Return</a></button>
</form>

<div class=" w3-responsive w3-card-4">
    <table class="w3-table w3-striped w3-bordered w3-blue">
        <thead>
        <tr class="w3-theme">
            <th>Id</th>
            <th>Name</th>
            <th>Id_district</th>
            <th>CreateAt</th>
            <th>Des</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody id="content">

        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>


    $(document).ready(function () {
        var dataSeed = `<tr class="w3-white">
                                            <th>TestStreet1</th>
                                            <th class="check_name">Hoàng Quốc Việt</th>
                                            <th class="check_district">Cầu Giấy</th>
                                            <th>2021-11-01</th>
                                            <th>Test</th>
                                            <th>
                                                Đang sử dụng
                                            </th>
                                        </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet2</th>
                                        <th class="check_name">Khuất Duy Tiến</th>
                                        <th class="check_district">Cầu Giấy</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang thi công
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet3</th>
                                        <th class="check_name">Phố Tôn Đức Thắng</th>
                                        <th class="check_district">Đống Đa</th>
                                        <th>2021-11-01</th>
                                        <th>Test thử</th>
                                        <th>
                                            Đang tu sửa
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet4</th>
                                        <th class="check_name">Hàng Bột</th>
                                        <th class="check_district">Đống Đa</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang tu sửa
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet5</th>
                                        <th class="check_name">Khúc Thừa Dụ</th>
                                        <th class="check_district">Cầu Giấy</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang thi công
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet6</th>
                                        <th class="check_name">Giảng Võ</th>
                                        <th class="check_district">Hai Bà Trưng</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang sử dụng
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet7</th>
                                        <th class="check_name">Khuất Duy Tiến</th>
                                        <th class="check_district">Hà Đông</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang sử dụng
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet8</th>
                                        <th class="check_name">Phương Liệt</th>
                                        <th class="check_district">Hoàn Kiếm</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang sử dụng
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet9</th>
                                        <th class="check_name">Khuất Duy Tiến</th>
                                        <th class="check_district">Cầu Giấy</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang tu sửa
                                        </th>
                                    </tr>
                                    <tr class="w3-white">
                                        <th>TestStreet10</th>
                                        <th class="check_name">Bưởi</th>
                                        <th class="check_district">Tây Hồ</th>
                                        <th>2021-11-01</th>
                                        <th>Test</th>
                                        <th>
                                            Đang sử dụng
                                        </th>
                                    </tr>
                                    `;

        var list = [
            { name: "Hoàng Quốc Việt", id_district: 1, created_at: "2021-11-01", des: "Test", status: "0"  },
            { name: "Khuất Duy Tiến", id_district: 2, created_at: "2021-11-01", des: "Test", status: "1"  },
            { name: "Phố Tôn Đức Thắng", id_district: 3, created_at: "2021-11-01", des: "Test", status: "2"  },
            { name: "Hàng Bột", id_district: 4, created_at: "2021-11-01", des: "Test", status: "0"  },
            { name: "Khúc Thừa Dụ", id_district: 5, created_at: "2021-11-01", des: "Test", status: "1"  },
            { name: "Giảng Võ", id_district: 1, created_at: "2021-11-01", des: "Test", status: "2"  },
            { name: "Khuất Duy Tiến", id_district: 2, created_at: "2021-11-01", des: "Test", status: "0"  },
            { name: "Phương Liệt", id_district: 3, created_at: "2021-11-01", des: "Test", status: "1"  },
            { name: "Khuất Duy Tiến", id_district: 4, created_at: "2021-11-01", des: "Test", status: "2"  },
            { name: "Bưởi", id_district: 5, created_at: "2021-11-01", des: "Test", status: "1"  },
        ];
        // seedData();
        // function seedData(){
        //     $.ajax({
        //         url:'http://localhost:8080/AssignmentDW/seedData.php',
        //         method: 'POST',
        //         data: JSON.stringify(list),
        //         success : function (responseData) {
        //             alert(responseData);
        //             // loadData();
        //             // $('form[name=formCity]').trigger("reset");
        //         },
        //         error:function () {
        //             alert('something error');
        //         }
        //     });
        // }

        function loadData() {
            $.ajax({
                url:'http://localhost:8080/AssignmentDW/listJSONStreet.php',
                method: 'get',
                success: function (responseData) {
                    var contentHTML = '';
                    var data = responseData.data;
                    // alert(responseData.message);
                    var contentHTML = '';
                    data.forEach(element => {
                        let checkStatus;
                        switch (element.status) {
                            case "0":
                                checkStatus = "Đang sử dụng";
                                break;
                            case "1":
                                checkStatus = "Đang thi công";
                                break;
                            case "2":
                                checkStatus = "Đang tu sửa";
                                break;
                        }
                        contentHTML += `
                        <tr class="w3-white">
                        <th>${element.streetId}</th>
                        <th class="check_name">${element.streetName}</th>
                        <th class="check_district">${element.districtName}</th>
                        <th>${element.created_at}</th>
                        <th>${element.des}</th>
                        <th>${checkStatus}</th>
                        </tr>
                        `;
                        console.log(element.name);
                    })

                    $('#content').html(dataSeed+contentHTML);
                    // $('#content').append(contentHTML);
                    // console.log(data);
                },
                error:function (error) {
                    alert(error);
                }
            });

            $.ajax({
                url:'http://localhost:8080/AssignmentDW/listJSONDistrict.php',
                method: 'get',
                success: function (responseData) {
                    var disableOption = '<option value="0" selected disabled>--All--</option>';
                    var data = responseData.data;
                    var districtHTML = '';
                    data.forEach(element => {
                        districtHTML += `
                        <option value="${element.id}">${element.name}</option>
                        `;

                        // districtHTML += `
                        // <option value="${element.id}">${element.name}</option>
                        // `;
                    })

                    $('#flitter_district').html(disableOption+districtHTML);
                    // $('#content').append(contentHTML);
                    // console.log(data);
                },
                error:function (error) {
                    alert(error);
                }
            });
        }
        loadData();
        // $('#reload').click(loadData);
    });

    $(document).ready(function () {
        // $("#keyword").keyup(function(){
        //     _this = this;
        //     // Show only matching TR, hide rest of them
        //     $.each($("#content .w3-white"), function() {
        //         if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1){ // tìm đến tất cả chuỗi trong mỗi SELECTER mà có giá trị -1 tức là không tồn tại
        //             $(this).hide();
        //         }
        //         else {
        //             $(this).show();
        //         }
        //     });
        // });
        //
        // $("#flitter_district").change(function(){
        //     var value_district = $("#flitter_district").val();
        //     _this = this;
        //     // Show only matching TR, hide rest of them
        //     // var check_district = $(".w3-white .check_district").val();
        //
        //     $.each($("#content .w3-white .check_district"), function() {
        //         // console.log($(this).val());
        //         if($(this).val() !==  value_district){ // tìm đến tất cả chuỗi trong mỗi SELECTER mà có giá trị -1 tức là không tồn tại
        //             $(this).hide();
        //         }
        //         else {
        //             $(this).show();
        //         }
        //     });
        // });

        var inputKeyword = $('input[name=keyword]');
        var selectFlitterDistrict = $('select[name=flitter_district]');
        // search Database, nếu ko phải seedData thì đã xong rồi
        $('form[name=searchForm]').submit(function (event) {
            // alert(inputKeyword.val());
            // alert(selectFlitterDistrict.val());
            if (inputKeyword.val() == "" && selectFlitterDistrict.val() == null){
                alert('please enter keyword search or Flitter District');
                event.preventDefault();
                return false;
            }
            event.preventDefault(); // đảm bảo dữ liệu sẽ gửi đi nhưng sẽ không chạy đến đường dẫn, tức là ở nguyên tại chỗ
            let data = {
                keyword: inputKeyword.val(),
                id_district: selectFlitterDistrict.val(),
            };

            $.ajax({
                url:'http://localhost:8080/AssignmentDW/searchStreet.php',
                method: 'POST',
                data: JSON.stringify(data),
                success : function (responseData) {
                    alert(responseData.message);
                    var contentHTML = '';
                    var data = responseData.data;
                    // alert(responseData.message);
                    var contentHTML = '';
                    data.forEach(element => {
                        let checkStatus;
                        switch (element.status) {
                            case "0":
                                checkStatus = "Đang sử dụng";
                                break;
                            case "1":
                                checkStatus = "Đang thi công";
                                break;
                            case "2":
                                checkStatus = "Đang tu sửa";
                                break;
                        }
                        contentHTML += `
                        <tr class="w3-white">
                        <th>${element.streetId}</th>
                        <th>${element.streetName}</th>
                        <th>${element.districtName}</th>
                        <th>${element.created_at}</th>
                        <th>${element.des}</th>
                        <th>
                            ${checkStatus}
                        </th>
                        </tr>
                        `;
                    })

                    $('#content').html(contentHTML);
                },
                error:function ($xhr,textStatus,errorThrown) {
                    // alert('something error');
                    console.log("ERROR : ", errorThrown);
                    console.log("ERROR : ", $xhr);
                    console.log("ERROR : ", textStatus);
                }
            });
        });
    });
</script>

</body>
</html>