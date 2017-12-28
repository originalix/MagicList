var Category = {
    createNew: function () {
        var category = {};

        /**
         * 改变编辑cell的编辑状态
         */
        category.changeEditState = function () {
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

        category.changeCellIcon = function (product, type) {
            var id = "#list-content" + product.id;

            var isNormal = type === "normal";

            var leftIcon = isNormal ? '&#xe67d;' : '&#xe648;';
            var rightIcon = isNormal ? '&#xe603;' : '&#xe6b3;';

            var leftClickFunction = isNormal ? "" : "category.deleteCell('" + product.id + "')";
            var rightClickFunction = isNormal ? "category.queryPrice('" + product.name + "')" : "category.editCell('" + product.id + "')";

            type = isNormal ? 'edit' : 'normal';

            var centerClickFunction = "category.changeCellIcon(" + JSON.stringify(product) + ", '" + type + "')"; 

            $(id).find($(".product-list-icon-block")).html("<i class='product-left-icon iconfont'>" + leftIcon + "</i> <i class='product-center-icon iconfont'>&#xe636;</i> <i class='product-right-icon iconfont'>" + rightIcon + "</i>");

            $(id).find(".product-center-icon").attr("onclick", centerClickFunction);
            $(id).find(".product-left-icon").attr("onclick", leftClickFunction);
            $(id).find(".product-right-icon").attr("onclick", rightClickFunction);
        }

        /**
         * ajax提交添加请求之后，刷新函数
         * @param {*} data
         */
        category.refreshData = function (data) {
            if (data.length <= 0) {
                return;
            }
            var html = "";
            for (var i = 0; i < data.length; i++) {
                html += "<div class='list-content hide' id= " +
                    data[i].id +
                    "<div href='#' class='list-link'> <ddiv class='product-list-icon-block'> <i class='product-left-icon iconfont'>&#xe67d;</i> <i class='product-center-icon iconfont'>&#xe636;</i> <i class='product-right-icon iconfont'>&#xe603;</i> </ddiv> <div class='list-title-block product-list-title-block'> <div class='product-list-seprate'> <i class='list-name-icon iconfont'>&#xe693;</i> <p class='product-list-title product-name'>" +
                    data[i].name +
                    "</p> </div> <div class='product-list-seprate'> <i class='list-name-icon iconfont'>&#xe6da;</i> <p class='product-list-title product-price'> ￥" +
                    data[i].price +
                    "</p> </div> <div class='product-list-seprate'> <i class='list-name-icon iconfont'>&#xe6f1;</i> <p class='product-list-title product-count'>" +
                    data[i].count +
                    "</p> </div> </div> </div> </div>";
                }
                html += "<div class='list-content hide'> <!-- 尚未编辑 --> <div href='#' class='list-link wait-edit' onclick='category.changeEditState()'> <div class='list-icon-block'> <i class='list-icon iconfont'>&#xe703;</i> </div> <div class='list-title-block'> <span class='list-title'> Write your own </span> </div> </div> <!-- 开始编辑 --> <div href='#' class='list-link editing'> <div class='list-icon-edit-block'> <i class='list-left-icon iconfont' onclick='category.changeEditState()'>&#xe625;</i> <i class='list-right-icon iconfont' onclick='category.submitForm(" +
                data[0].category_id +
                ")'>&#xe627;</i> </div> <div class='add-form'> <form id='form' method='post' class='form-content'> <div class='input-control'> <i class='form-edit-icon iconfont'>&#xe693;</i> <input type='text' name='name' id='name' class='category-input' placeholder='单品名称'> <hr class='form-separated'></hr> </div> <div class='input-control'> <i class='form-edit-icon iconfont'>&#xe6da;</i> <input type='text' name='price' id='price' class='category-input' placeholder='单品单价'> <hr class='form-separated'></hr> </div> <div class='input-control'> <i class='form-edit-icon iconfont'>&#xe6f1;</i> <input type='text' name='count' id='count' class='category-input' placeholder='购买数量'> <hr class='form-separated'></hr> </div> <input type='hidden' name='_csrf' value='<?=Yii::$app->request->getCsrfToken()?>' /> </form> </div> </div> </div>";
            $(".category-list").html(html);
            var home = Home.createNew();
            home.switchIcon(0, data[0].category_id, true);
            $(".list-content").removeClass('hide');
        }

        category.queryPrice = function (name) {
            console.log(name);
            window.location.href = "https://so.m.jd.com/ware/search.action?keyword=" + name;
        }

        /**
         * 提交新增项目表单
         * @param {*} id
         */
        category.submitForm = function (id) {
            var params = {
                "name": $("#name").val(),
                "price": $("#price").val(),
                "count": $("#count").val(),
                "category_id": id,
            };

            $.ajax({
                type: "POST",
                url: "",
                data: params,
                dataType: "json",
                success: function (response) {
                    var code = response.code;
                    var msg = response.msg;
                    if (code == 200) {
                        console.log(response.data);
                        category.changeEditState();
                        category.refreshData(response.data);
                    } else {
                        console.log('code = ' + code + '; msg = ' + msg);
                    }
                }
            });
        }

        category.deleteCell = function (id) {
            console.log('delete cell');
        }

        category.editCell = function (id) {
            console.log('edit cell');
        }

        return category;
    }
}