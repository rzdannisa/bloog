<strong><center>{{ $data->judul }}</center></strong>
<br>
{{ $data->isi }}

<br>
<br>
<br>

{{ date_format(date_create($data->created_at),
	"D, d M Y H:i:s ") }}

<br>
By {{ App\User::find($data->idpengguna )['email'] }}