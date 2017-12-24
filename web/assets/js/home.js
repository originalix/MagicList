var Home = {
    createNew: function() {
        var home = {};

        home.switchIcon = function(id, typeId) {
            switch (typeId)
            {
                // 家电
                case 1:
                    changeListStyle(id, "#493a6c", "&#xe64f;");
                    break;

                // 硬装
                case 2:
                    changeListStyle(id, "#a16e96", "&#xe606;");
                break;

                // 软装
                case 3:
                    changeListStyle(id, "#dc93ae", "&#xe650;");
                    break;

                // 数码
                case 4:
                    changeListStyle(id, "#59455e", "&#xe62b;");
                    break;

                // 显示器
                case 5:
                    changeListStyle(id, "#8c8aaa", "&#xe63e;");
                    break;

                // 机械键盘
                case 6:
                    changeListStyle(id, "#8c4c66", "&#xe63f;");
                    break;

                default:
                    changeListStyle(id, "#493a6c", "&#xe61e;");
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
