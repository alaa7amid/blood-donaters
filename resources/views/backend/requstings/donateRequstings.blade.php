@extends('backend.master')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-6">Donation</h2>

            <!-- Check if there are any requests -->
            @if($requests->isEmpty())
                <p class="text-gray-500">No requests available at the moment.</p>
            @else
                <table class="min-w-full bg-white border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Patient Name</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Age</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Gender</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Blood Type</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $request)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $request->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $request->full_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $request->date_of_birth }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $request->gender }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $request->blood_type }}</td>
                     
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('showDonate', $request->id) }}" class="btn btn-primary mt-3">View Details</a>
                                {{-- <a href="{{ route('requests.show', $request->id) }}" class="text-blue-600 hover:underline">View</a> | --}}
                                {{-- <form action="{{ route('requests.delete', $request->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            @endif
        </div>
</div

@endsection