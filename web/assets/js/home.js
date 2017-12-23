var Home = {
    createNew: function() {
        var home = {};

        home.switchIcon = function(id, typeId) {
            switch (typeId)
            {
                case 1:
                    $("#list-content" + id).css("background-color", "green");
                    $("#list-content" + id).find("i").html('&#xe62a;');
                    break;

                default:
                    $("#list-content" + id).css("background-color", "gray");
                    $("#list-content" + id).find("i").html('&#xe61e;');
                    break;
            }
        }

        return home;
    }
}
