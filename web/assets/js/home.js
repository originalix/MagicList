var Home = {
    createNew: function() {
        var home = {};

        home.switchIcon = function(id, typeId) {
            switch (typeId)
            {
                // 家电
                case 1:
                    changeListStyle(id, "green", "&#xe62a;");
                    break;

                // 硬装
                case 2:
                    changeListStyle(id, "green", "&#xe62a;");
                break;

                // 软装
                case 3:
                    changeListStyle(id, "green", "&#xe62a;");
                    break;

                // 数码
                case 4:
                    changeListStyle(id, "green", "&#xe62a;");
                    break;

                // 显示器
                case 5:
                    changeListStyle(id, "green", "&#xe62a;");
                    break;

                // 机械键盘
                case 6:
                    changeListStyle(id, "green", "&#xe62a;");
                    break;

                default:
                    changeListStyle(id, "gray", "&#xe61e;");
                    break;
            }
        }

        function changeListStyle(id, color, icon)
        {
            $("#list-content" + id).css("background-color", color);
            $("#list-content" + id).find("i").html(icon);
        }

        return home;
    }
}
