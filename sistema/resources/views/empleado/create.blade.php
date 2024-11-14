<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" 
        class="form-control" 
        name="Nombre" 
        id="Nombre" 
        aria-describedby="helpId" 
        placeholder="Nombre">
    </div>

    <div class="mb-3">
        <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
        <input type="text" 
        class="form-control" 
        name="ApellidoPaterno" 
        id="ApellidoPaterno" 
        aria-describedby="helpId" 
        placeholder="Apellido paterno">
    </div>

    <div class="mb-3">
        <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
        <input type="text" 
        class="form-control" 
        name="ApellidoMaterno" 
        id="ApellidoMaterno" 
        aria-describedby="helpId" 
        placeholder="Apellido Materno">
    </div>

    <div class="mb-3">
        <label for="Correo" class="form-label">Correo</label>
        <input type="text" 
        class="form-control" 
        name="Correo" id="Correo" 
        aria-describedby="helpId" 
        placeholder="Correo">
    </div>

    <div class="mb-3">
        <label for="Nombre" class="form-label">Foto</label>
        <input type="file" 
        class="form-control" 
        name="Foto" 
        id="Foto" 
        aria-describedby="helpId"
        placeholder="Foto">
    </div>
    <button type="submit" class="btn btn-primary"> Enviar </buttom>
</form>
