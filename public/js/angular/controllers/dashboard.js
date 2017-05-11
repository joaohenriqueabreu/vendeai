app.controller('dashboard', dashboardController);

function dashboardController($scope){

    $scope.sendFile2 = function(url){
        $scope.photo_url = url;
    };

    /// Função para copiar dados dos clientes para o destino
    $scope.copyFromCustomer = function(){
        var customer = $('input[name^=customer]');
        var destination =  $('input[name^=destination]');

        /// Endereço
        destination[2].value = customer[4].value;
        /// Bairro
        destination[3].value = customer[5].value;
        /// Número
        destination[4].value = customer[6].value;
        /// Complemento
        destination[5].value = customer[7].value;
        /// Cidade
        destination[6].value = customer[8].value;
        /// Estado
        destination[7].value = customer[9].value;
    }
}

app.config(function($locationProvider) {
    $locationProvider.html5Mode(true);
});
