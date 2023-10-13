$(document).ready(function() {
    $(".nav-item").removeClass("active");
    $(".nav-link").removeClass("active");
    var typingTimer;                // Timer identifier
    var doneTypingInterval = 1000;  // Délai de saisie en millisecondes (1 seconde)


    $(document).on("click",".updateAdminStatus",function(){
        var status = $(this).children("i").attr("status");
        var admin_id =$(this).attr("admin_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/update-admin-status',
            data:{status:status,admin_id:admin_id},
            success:function(resp){
               if(resp['status']==0){
                $("#admin-"+admin_id).html("<i  style='font-size: 25px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
               } else if(resp['status']==1){
                $("#admin-"+admin_id).html("<i  style='font-size: 25px;' class='mdi mdi-bookmark-check' status='Active'></i>");
               }
            },error:function(){
                alert("Error");
            }
        })
    })

    $(document).on("click",".confirmDelete",function(){
        var module = $(this).attr("module");
        var moduleid = $(this).attr("moduleid");
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: "Vous ne pourrez pas revenir en arrière!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprime-le!',
            cancelButtonText: 'Retour'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Supprimé!',
                'Votre fichier a été supprimé.',
                'success'
              )
              window.location= "/admin/delete-"+module+"/"+moduleid;
            }
          })
    })


    $(document).on("click",".updateAprprenantStatus",function(){
      var status = $(this).children("i").attr("status");
      var apprenant_id =$(this).attr("apprenant_id");
      $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type:'post',
          url:'/admin/update-apprenant-status',
          data:{status:status,apprenant_id:apprenant_id},
          success:function(resp){
             if(resp['status']==0){
              $("#apprenant-"+apprenant_id).html("<i  style='font-size: 25px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
             } else if(resp['status']==1){
              $("#apprenant-"+apprenant_id).html("<i  style='font-size: 25px;' class='mdi mdi-bookmark-check' status='Active'></i>");
             }
          },error:function(){
              alert("Error");
          }
      })
  })

  $(document).on("click",".confirmDelete",function(){
    var module = $(this).attr("module");
    var moduleid = $(this).attr("moduleid");
    Swal.fire({
        title: 'Êtes-vous sûr?',
        text: "Vous ne pourrez pas revenir en arrière!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprime-le!',
        cancelButtonText: 'Retour'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Supprimé!',
            'Votre fichier a été supprimé.',
            'success'
          )
          window.location= "/admin/delete-"+module+"/"+moduleid;
        }
      })
})

$(document).on("click",".confirmDelete",function(){
  var module = $(this).attr("module");
  var moduleid = $(this).attr("moduleid");
  Swal.fire({
      title: 'Êtes-vous sûr?',
      text: "Vous ne pourrez pas revenir en arrière!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Oui, supprime-le!',
      cancelButtonText: 'Retour'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Supprimé!',
          'Votre fichier a été supprimé.',
          'success'
        )
        window.location= "/inactive/delete-"+module+"/"+moduleid;
      }
    })
})

// status demande 

$(document).on("click",".updateDemandeStatus",function(){
  var status = $(this).children("i").attr("status");
  var demande_id =$(this).attr("demande_id");
  $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type:'post',
      url:'/admin/update-Demande-status',
      data:{status:status,demande_id:demande_id},
      success:function(resp){
         if(resp['status']==0){
          $("#demande-"+demande_id).html("<i  style='font-size: 25px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
         } else if(resp['status']==1){
          $("#demande-"+demande_id).html("<i  style='font-size: 25px;' class='mdi mdi-bookmark-check' status='Active'></i>");
         }
      },error:function(){
          alert("Error");
      }
  })
})


$(document).on("click",".confirmDelete",function(){
  var module = $(this).attr("module");
  var moduleid = $(this).attr("moduleid");
  Swal.fire({
      title: 'Êtes-vous sûr?',
      text: "Vous ne pourrez pas revenir en arrière!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Oui, supprime-le!',
      cancelButtonText: 'Retour'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Supprimé!',
          'Votre fichier a été supprimé.',
          'success'
        )
        window.location= "/delete-"+module+"/"+moduleid;
      }
    })
})

//apprenant suprimer
$(document).on("click",".confirmDelete",function(){
  var module = $(this).attr("module");
  var moduleid = $(this).attr("moduleid");
  Swal.fire({
      title: 'Êtes-vous sûr?',
      text: "Vous ne pourrez pas revenir en arrière!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Oui, supprime-le!',
      cancelButtonText: 'Retour'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Supprimé!',
          'Votre fichier a été supprimé.',
          'success'
        )
        window.location= "/adminactive/delete-"+module+"/"+moduleid;
      }
    })
})
});
