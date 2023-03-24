function alert()
{
    Swal.fire({
        text: "NOME DE USUÁRIO OU SENHA INCORRETO",
        icon: 'error',
        confirmButtonColor: '#78bf3a',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed)
        {
            
        }
      })
}
alert();