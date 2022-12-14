<?php

namespace App\Http\Controllers\Tracker;

use App\Http\Controllers\Controller;
use App\Http\Resources\Tracker\Activity\ActivityOperationLanguageResource;
use App\Http\Resources\Tracker\Activity\ActivityOperationResource;
use App\Http\Resources\Tracker\Activity\ActivityOperationStatusResource;
use App\Http\Resources\Tracker\Activity\ActivityOperationTypeGroupResource;
use App\Http\Resources\Tracker\Activity\ActivityOperationTypeResource;
use App\Http\Resources\Tracker\Activity\ActivityResource;
use App\Http\Resources\Tracker\Activity\ActivityTypeResource;
use App\Http\Resources\Tracker\Event\EventOperationResource;
use App\Http\Resources\Tracker\Event\EventOperationStatusResource;
use App\Http\Resources\Tracker\Event\EventOperationTypeGroupResource;
use App\Http\Resources\Tracker\Event\EventOperationTypeResource;
use App\Http\Resources\Tracker\Event\EventResource;
use App\Http\Resources\Tracker\Event\EventTypeResource;
use App\Models\Tracker\Activity\Activity;
use App\Models\Tracker\Activity\ActivityOperation;
use App\Models\Tracker\Activity\ActivityOperationLanguage;
use App\Models\Tracker\Activity\ActivityOperationStatus;
use App\Models\Tracker\Activity\ActivityOperationType;
use App\Models\Tracker\Activity\ActivityOperationTypeGroup;
use App\Models\Tracker\Activity\ActivityType;
use App\Models\Tracker\Event\Event;
use App\Models\Tracker\Event\EventOperation;
use App\Models\Tracker\Event\EventOperationStatus;
use App\Models\Tracker\Event\EventOperationType;
use App\Models\Tracker\Event\EventOperationTypeGroup;
use App\Models\Tracker\Event\EventType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function complex(): array
    {
        return [
            'eventTypes' => EventTypeResource::collection(EventType::all()),
            'events' => EventResource::collection(Event::all()),
            'eventOperationTypeGroups' => EventOperationTypeGroupResource::collection(EventOperationTypeGroup::all()),
            'eventOperationTypes' => EventOperationTypeResource::collection(EventOperationType::all()),
            'eventOperationStatuses' => EventOperationStatusResource::collection(EventOperationStatus::all()),
            'eventOperations' => EventOperationResource::collection(EventOperation::all()),
            'activityTypes' => ActivityTypeResource::collection(ActivityType::all()),
            'activities' => ActivityResource::collection(Activity::all()),
            'activityOperationTypeGroups' => ActivityOperationTypeGroupResource::collection(ActivityOperationTypeGroup::all()),
            'activityOperationTypes' => ActivityOperationTypeResource::collection(ActivityOperationType::all()),
            'activityOperationLanguages' => ActivityOperationLanguageResource::collection(ActivityOperationLanguage::all()),
            'activityOperationStatuses' => ActivityOperationStatusResource::collection(ActivityOperationStatus::all()),
            'activityOperations' => ActivityOperationResource::collection(ActivityOperation::all()),
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return EventResource::collection(Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
