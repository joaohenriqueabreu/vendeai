angular.controller('master', masterController);

function masterController ($scope){
    $scope.moreInfo = {
        register: "custom-hide",
        personalize: "custom-hide",
        choose: "custom-hide",
        ready: "custom-hide",
        spread: "custom-hide",
        logistics: "custom-hide",
        close: "custom-hide",
        comission: "custom-hide"
    };


    $scope.showInfo = function(which){
        var show = "custom-show";

        switch(which){
            case 'register':
                $scope.moreInfo.register = show;
                break;
            case 'personalize':
                $scope.moreInfo.personalize = show;
                break;
            case 'choose':
                $scope.moreInfo.choose= show;
                break;
            case 'ready':
                $scope.moreInfo.ready = show;
                break;
            case 'spread':
                $scope.moreInfo.spread = show;
                break;
            case 'logistics':
                $scope.moreInfo.logistics = show;
                break;
            case 'close':
                $scope.moreInfo.close = show;
                break;
            case 'comission':
                $scope.moreInfo.comission= show;
                break;
            default:
                break;

        }
    }
}
