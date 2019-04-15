<?php $this-> menu() ?>

  <main>
    <div class="container">

      <h3 class="center padbottom CorTexto">Contato</h3>

      <div class = "row">
         <form class = "col s12">
            <div class = "row">
               <div class = "input-field col s6">
                  <i class = "material-icons prefix CorTexto">account_circle</i>
                  <input placeholder = "Usuário" value = "" id = "name" type = "text" class = "active validate" required />
                  <label for = "name">Usuário</label>
               </div>

               <div class = "input-field col s6">
                 <i class = "material-icons prefix CorTexto">vpn_key</i>
                  <label for = "senha">Senha</label>
                  <input id = "password" type = "password" placeholder = "Senha" class = "validate" required />
               </div>
            </div>

            <div class = "row">
               <div class = "input-field col s12">
                 <i class = "material-icons prefix CorTexto">email</i>
                  <input placeholder = "Email" id = "email" type = "email" class = "validate">
                  <label for = "email">Email</label>
               </div>
            </div>

            <div class = "row">
               <div class = "input-field col s12">
                  <i class = "material-icons prefix CorTexto">mode_edit</i>
                  <textarea id = "address" placeholder="Endereço" class = "materialize-textarea"></textarea>
                  <label for = "address">Endereço</label>
               </div>
            </div>

            <div class = "row">
               <div class = "input-field col s12">
                 <i class = "material-icons prefix CorTexto">textsms</i>
                  <input placeholder = "Comentários" id = "comments" type = "text" disabled />
                  <label for = "comments">Comentários</label>
               </div>
            </div>

            <div class="row">
              <div class = "col s6">
                 <div class = "input-field col s12">
                   <p>
                     <label>
                       <h6>Estado Civil</h6> <br>
                       <input type="checkbox" checked="checked"/>
                       <span>Solteiro</span>
                     </label>
                   </p>
                   <p>
                     <label>
                       <input type="checkbox"/>
                       <span>Casado</span>
                     </label>
                   </p>
                   <p>
                     <label>
                       <input type="checkbox" />
                       <span>Não sei</span>
                     </label>
                   </p>

                 </div>
              </div>

              <div class = "col s6">
                 <div class = "input-field col s12">
                   <p>
                     <label>
                       <h6>Sexo</h6> <br>
                       <input type="checkbox" checked="checked"/>
                       <span>Masculino</span>
                     </label>
                   </p>
                   <p>
                     <label>
                       <input type="checkbox"/>
                       <span>Femenino</span>
                     </label>
                   </p>
                   <p>
                     <label>
                       <input type="checkbox" />
                       <span>Não sei</span>
                     </label>
                   </p>
                 </div>
              </div>
            </div>

         </form>
      </div>
    </div>
  </main>

<?php $this-> footer() ?>
