<div class="row g-3">
    <div class="col-md-6">
        <label>First Name</label>
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $doctor->first_name ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label>Last Name</label>
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $doctor->last_name ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $doctor->email ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $doctor->phone ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label>Specialization</label>
        <input type="text" name="specialization" class="form-control" value="{{ old('specialization', $doctor->specialization ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value="{{ old('address', $doctor->address ?? '') }}" required>
    </div>
</div>
