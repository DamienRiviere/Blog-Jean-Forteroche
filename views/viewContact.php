<?php $this->_t = "Contact" ?>

<div class="container-contact bg-light">

    <div class="container">
        <h2 class="style-contact-title">Formulaire de contact :</h2>
        <form action="index.php?action=test" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputname">Votre nom :</label>
                        <input type="text" name="name" class="form-control" id="inputname">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputemail">Votre email :</label>
                        <input type="text" name="email" class="form-control" id="inputemail">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputobject">Objet :</label>
                        <input type="text" name="object" class="form-control" id="inputobject">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputcontent">Votre message :</label>
                        <textarea id="inputcontent" name="content" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </form>
    
    </div>
    
</div>