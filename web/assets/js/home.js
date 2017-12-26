var Home = {
    createNew: function() {
        var home = {};

        /**
         * 根据categories表的id 以及typeid，改变列表图标和背景色
         * @param {*} id    主键id 
         * @param {*} typeId    类型id
         */
        home.switchIcon = function(id, typeId, onlyBackground) {
            switch (typeId)
            {
                // 家电
                case 1:
                    changeListStyle(id, "#493a6c", "&#xe64f;", onlyBackground);
                    break;

                // 硬装
                case 2:
                    changeListStyle(id, "#a16e96", "&#xe606;", onlyBackground);
                break;

                // 软装
                case 3:
                    changeListStyle(id, "#dc93ae", "&#xe650;", onlyBackground);
                    break;

                // 数码
                case 4:
                    changeListStyle(id, "#59455e", "&#xe62b;", onlyBackground);
                    break;

                // 显示器
                case 5:
                    changeListStyle(id, "#8c8aaa", "&#xe63e;", onlyBackground);
                    break;

                // 机械键盘
                case 6:
                    changeListStyle(id, "#8c4c66", "&#xe63f;", onlyBackground);
                    break;

                default:
                    changeListStyle(id, "#493a6c", "&#xe61e;", onlyBackground);
                    break;
            }
        }

        function changeListStyle(id, color, icon, onlyBackground)
        {
            if (onlyBackground) {
                $(".list-content").css("background-color", color);
                return;
            }
            $("#list-content" + id).css("background-color", color);
            $("#list-content" + id).find("i").html(icon);
        }

        return home;
    }
}
