var Category = {
    createNew: function ()
    {
        var category = {};

        category.changeEditState = function ()
        {
            function changeEditState()
            {
                if ($(".editing").css("display") === 'none') {
                    console.log('开始编辑');
                    $(".wait-edit").css("display", "none");
                    $(".editing").css("display", 'block');
                } else {
                    console.log('关闭编辑');
                    $(".wait-edit").css("display", "block");
                    $(".editing").css("display", 'none');
                }
            }
        }

        category.refreshData = function(data)
        {
            if (data.length <= 0) {
                return;
            }
            var html = "";
            for (var i = 0; i < data.length; i++) {
                html += "<div class='list-content hide' id= " + 
                data[i].id +
                "<a href='#' class='list-link'> <div class='product-list-icon-block'> <i class='product-left-icon iconfont'>&#xe67d;</i> <i class='product-center-icon iconfont'>&#xe636;</i> <i class='product-right-icon iconfont'>&#xe603;</i> </div> <div class='list-title-block product-list-title-block'> <div class='product-list-seprate'> <i class='list-name-icon iconfont'>&#xe693;</i> <p class='product-list-title product-name'>" +
                data[i].name + 
                "</p> </div> <div class='product-list-seprate'> <i class='list-name-icon iconfont'>&#xe6da;</i> <p class='product-list-title product-price'> ￥" +
                data[i].price  + 
                "</p> </div> <div class='product-list-seprate'> <i class='list-name-icon iconfont'>&#xe6f1;</i> <p class='product-list-title product-count'>" + 
                 data[i].count + 
                 "</p> </div> </div> </a> </div>";
                $(".category-list").html(html);
            }
        }

        category.submitForm = function(id)
        {
            var params = {
                "name": $("#name").val(),
                "price": $("#price").val(),
                "count": $("#count").val(),
                "category_id" : id,
            };
    
            // console.log(params);
    
            $.ajax({
                type: "POST",
                url: "",
                data: params,
                dataType: "json",
                success: function(response) {
                    var code = response.code;
                    var msg = response.msg;
                    if (code == 200) {
                        console.log(response.data);
                        changeEditState();
                        // location.reload();
                        refreshData(response.data);
                    } else {
                        console.log('code = ' + code + '; msg = ' + msg);
                    }
                }
            });
        }
    }
}