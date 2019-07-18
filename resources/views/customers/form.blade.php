@csrf
<div class="form-group">
    <label for="inputName">이름</label>
    <input type="text" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="이름을 입력하세요" value="{{ old('name') ?? $customer->name }}">
    <div class="text-danger">{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="inputEmail">이메일</label>
    <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="이메일을 입력하세요" value="{{ old('email') ?? $customer->email }}">
    <div class="text-danger">{{ $errors->first('email') }}</div>
</div>
<div class="form-group">
    <label for="selectActive">활성 상태</label>
    <select class="form-control" name="active" id="selectActive">
        @foreach ($customer->activeOptions() as $k => $v)
            <option value="{{ $k }}" {{ $customer->active == $v ? 'selected' : '' }}>{{ $v }}</option>
        @endforeach
    </select>
    <div class="text-danger">{{ $errors->first('active') }}</div>
</div>
<div class="form-group">
    <label for="selectCompany">회사</label>
    <select class="form-control" name="company_id" id="selectCompany">
        @foreach ($companyList as $company)
            <option value="{{ $company->id }}" {{ $customer->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>
    <div class="text-danger">{{ $errors->first('company_id') }}</div>
</div>
