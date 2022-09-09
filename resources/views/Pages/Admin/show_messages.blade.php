
<x-layout>
    <x-pic-card>
        <br>
        <h2>Messages</h2>
    </x-pic-card>
    <br>
    <br>
    <section class="section">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="messagesTable table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>Name</th>
						      <th>Email</th>
						      <th>Subject</th>
						      <th>Message</th>
						    </tr>
						  </thead>
						  <tbody>
                            @foreach ($messages as $message)
                                <tr>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->subject ? $message->subject : 'No Subject'}}</td>
                                    <td>{!!Str::words($message->message,10,'. . .')!!}</td>
                                    <td><button class="btn btn-primary" id="viewBtn" data-id="{{$message->id}}">View</button></td>
                                </tr>
                            @endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
     <!-- Modal -->
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Message:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="message"></p>
                
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    
</x-layout>