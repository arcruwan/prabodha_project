<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TutorsDetails;
use App\Models\TutorProfilePic;
use App\Models\TutorNicPic;
use App\Models\TutorOlResultSheet;
use App\Models\TutorAlResultSheet;
use App\Models\TutorsOtherQualification;
use App\Models\TutorOtherQualificationPic;
use App\Models\SubjectsThatCanBeTaught;
class tutorRegistrationController extends Controller
{
    public function index()
    {
     
        return view('Client.Registration.tutorRegistration');

    }

    public function Store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|size:10',
            'nic' => 'required|string|between:10,12',
            'email' => 'required|email|unique:tutors_details,email',        

        ]);

        $tutorDetails = TutorsDetails::create([
            'fullname' => $data['name'],
            'address' => $data['address'],
            'contactNumber' => $data['phone'],
            'contactNumberFixed' => $data['Homephone'],
            'gender' => $data['gender'],
            'nic' => $data['nic'],
            'email'=> $data['email'],
            'description'=> $data['description'],
            'yearofOLExam'=> $data['YearofOLExam'],
            'OLIndexNumber'=> $data['OLIndexNumber'],
            'OLResult'=> $data['OLResult'],
            'yearofALExam'=> $data['YearofALExam'],
            'ALIndexNumber'=> $data['ALIndexNumber'],
            'ALResult'=> $data['ALResult'],
            'quolificationDescription'=> $data['QualificationMoreDescription'],
            'language'=> $data['language'],
            'type'=> $data['language'],
            'currentOccupation'=> $data['currentOccupation'],
            'experience'=> $data['experience'],
            'login_id'=> $data['login_id'],
        
        ]);
        foreach ($request->file('tutorPropic') as $index => $image) {
            $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
            $image->move('img/Tutor/profilePicture', $imageName);

            $TutorProfilePic = new TutorProfilePic();
            $TutorProfilePic->tutor_proPic = $imageName;
            $TutorProfilePic->tutor_id = $tutorDetails->id;
            $TutorProfilePic->save();
        }
        foreach ($request->file('tutornNICpic') as $index => $image) {
            $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
            $image->move('img/Tutor/TutornNICpic', $imageName);

            $TutorNicPic = new TutorNicPic();
            $TutorNicPic->tutor_nicPic = $imageName;
            $TutorNicPic->tutor_id = $tutorDetails->id;
            $TutorNicPic->save();
        }
        foreach ($request->file('OLResultSheetpic') as $index => $image) {
            $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
            $image->move('img/Tutor/Qualification/OLResultSheetpic', $imageName);

            $TutorOlResultSheet = new TutorOlResultSheet();
            $TutorOlResultSheet->tutor_OL_Resultsheet_Pic = $imageName;
            $TutorOlResultSheet->tutor_id = $tutorDetails->id;
            $TutorOlResultSheet->save();
        }
        foreach ($request->file('ALResultSheetpic') as $index => $image) {
            $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
            $image->move('img/Tutor/Qualification/ALResultSheetpic', $imageName);

            $TutorAlResultSheet = new TutorAlResultSheet();
            $TutorAlResultSheet->tutor_AL_Resultsheet_Pic = $imageName;
            $TutorAlResultSheet->tutor_id = $tutorDetails->id;
            $TutorAlResultSheet->save();
        }

        foreach ($data['quolificationData'] as $rowData) {
            $TutorsOtherQualification = TutorsOtherQualification::create([
                'QualificationType' => $rowData['QualificationType'],
                'NatureofQualification' => $rowData['NatureofQualification'],
                'description' => $rowData['quolificationDescription'],
                'completeYear' => $rowData['completeYear'],
                'tutor_id' => $tutorDetails->id
            ]);
    
            if (isset($rowData['images'])) {
                foreach ($rowData['images'] as $index => $image) {
                    $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                    $image->move('img/Tutor/Qualification/OtherQualification', $imageName);
    
                    $TutorOtherQualificationPic = new TutorOtherQualificationPic();
                    $TutorOtherQualificationPic->tutor_other_qualifications_Pic = $imageName;
                    $TutorOtherQualificationPic->tutor_qualifications_id = $TutorsOtherQualification->id;
                    $TutorOtherQualificationPic->save();
                }
            }
        }


        foreach ($data['SubjectData'] as $newRowData) {
            $SubjectsThatCanBeTaught = SubjectsThatCanBeTaught::create([
                'subject' => $newRowData['Subject'],
                'selectedLevel' => $newRowData['selected_level'],
                'tutor_id' => $tutorDetails->id
            ]);
        }

        if (isset($tutorDetails)) {
            // if everything is successful
            return response()->json([
                'status' => 'Success',
                'message' => 'Customer created successfully'
            ]);
        } else {
            // if there was an error creating the customer
            return response()->json([
                'status' => 'Error',
                'message' => 'There was an error creating the customer'
            ]);
        }

    }
}
