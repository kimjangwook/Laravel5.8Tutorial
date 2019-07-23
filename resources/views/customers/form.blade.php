@csrf
<div class="form-group">
    <label for="inputName">お名前</label>
    <input type="text" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="お名前を入力してください" value="{{ old('name') ?? $customer->name }}">
    <div class="text-danger">{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="inputEmail">メールアドレス</label>
    <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="メールアドレスを入力してください" value="{{ old('email') ?? $customer->email }}">
    <div class="text-danger">{{ $errors->first('email') }}</div>
</div>
<div class="form-group">
    <label for="selectActive">ステータス</label>
    <select class="form-control" name="active" id="selectActive">
        @foreach ($customer->activeOptions() as $k => $v)
            <option value="{{ $k }}" {{ $customer->active == $v ? 'selected' : '' }}>{{ $v }}</option>
        @endforeach
    </select>
    <div class="text-danger">{{ $errors->first('active') }}</div>
</div>
<div class="form-group">
    <label for="selectCompany">会社</label>
    <select class="form-control" name="company_id" id="selectCompany">
        @foreach ($companyList as $company)
            <option value="{{ $company->id }}" {{ $customer->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>
    <div class="text-danger">{{ $errors->first('company_id') }}</div>
</div>

<div class="form-group d-flex flex-column">
    <label for="inputFileProfile">プロフィール写真</label>
    <input type="file" name="image" class="py-2" id="inputFileProfile">
    <div class="text-danger">{{ $errors->first('image') }}</div>
</div>
