@extends('back.template.main')







@section('backContent')

<div class="container mt-5 w-100" style="background-color: white">
    <h1 class="text-center text-decoration-underline fs-4 fw-bold my-3">MailBox</h1>

    <div class="icon_mail w-25 mx-auto border d-flex justify-content-evenly">
     <button class="icon-mail-container active-icon-mail"><i class="fas fa-mail-bulk fs-2"></i></button>
     <button class="icon-mail-container"><i class="fas fa-envelope-square fs-2"></i></button>
     <button class="icon-mail-container"><i class="fas fa-envelope-open-text fs-2"></i></button>   
    </div>
<style>
  .icon-mail-container{
      display: inline-block;
      min-height: 50px;
      min-width: 50px;
      text-align: center;
      transition: 0.2s;
      /* border: 2px solid green; */
  } 

  .active-icon-mail{
    border-right: 4px solid grey;
    border-bottom: 4px solid grey;

  }
  .hide-mail{
    display: none;
  }

</style>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Object</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($emails as $email )
              
          <tr class="mail {{$email->lu?"open-mail":"no-open-mail"}}" style="{{$email->lu?'':'background-color: rgb(214,214,214);'}}"    >
            <th scope="row">{{$email->id}}</th>
            <td>{{$email->object}}</td>
            <td class="d-flex justify-content-evenly">
                @if ($email->typemail==="inscription")
                    <a href="{{route('emailsendeds.show',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    
                @elseif ($email->typemail==="création")
                    <a href="{{route('emailsendeds.show2',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                @elseif ($email->typemail==="newsletter")
                    <a href="{{route('emailsendeds.newslettershow',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                
                @elseif($email->typemail==="event")
                    <a href="{{route('emailsendeds.eventshow',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    
                @elseif($email->typemail==="contact")
                    <a href="{{route('emailsendeds.contactshow',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                @endif
              <form action="{{route('emailsendeds.destroy',$email->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
    
      </tbody>
    </table>
<script>
  var tabBtns = Array.from(document.getElementsByClassName('icon-mail-container'));
  var tabMailLu = Array.from(document.getElementsByClassName('open-mail'));
  var tabMailNonLu = Array.from(document.getElementsByClassName('no-open-mail'));
  var allMail = Array.from(document.getElementsByClassName('mail'));
  console.log(allMail)
  tabBtns.forEach(elt => {
    console.log(elt);
      elt.addEventListener('click',(e)=>{
        // console.log("click: ",e.target.parentNode)
        tabBtns.forEach(btn=>{
          if(e.target.parentNode != btn && btn.classList.contains('active-icon-mail')){
            btn.classList.remove('active-icon-mail')   
          } else{
              e.target.parentNode.classList.add('active-icon-mail');

          }      
        })


        if(e.target.parentNode == tabBtns[0] ){
          allMail.forEach(elt=>{
            if(elt.classList.contains('hide-mail')){
              elt.classList.remove('hide-mail')
            }
          });
        }else if(e.target.parentNode == tabBtns[1] ){
          tabMailLu = Array.from(document.getElementsByClassName('open-mail'));
          console.log(tabMailLu)
          tabMailLu.forEach(elt=>{
            if(!elt.classList.contains('hide-mail')){
              elt.classList.add('hide-mail')
            }
          })
            tabMailNonLu.forEach(elt=>{
              if(elt.classList.contains('hide-mail')){
                elt.classList.remove('hide-mail')
              }
            })
        }
        else if(e.target.parentNode == tabBtns[2] ){
            tabMailLu = Array.from(document.getElementsByClassName('open-mail'));
            tabMailNonLu = Array.from(document.getElementsByClassName('no-open-mail'));
            console.log("dans ma condition")
            tabMailNonLu.forEach(elt=>{
              if(!elt.classList.contains('hide-mail')){
                elt.classList.add('hide-mail')
              }         
            })

            tabMailLu.forEach(elt=>{
              if(elt.classList.contains('hide-mail')){
                elt.classList.remove('hide-mail')
              }
            })

        }      
      })
  });

</script>

</div>    
@endsection

