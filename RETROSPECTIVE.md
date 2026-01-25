# Project Retrospective
## Haley's Hobby Yarn & Thread
**Author:** Haley Archer  
**Course:** SDC310L  
**Date:** January 25, 2026  
**Project Duration:** 5 Weeks (Term 10)

---

## What Went Well During Your Project?

Overall, the project went pretty smoothly and I'm happy with how it turned out. A few things really stood out as wins:

**MVC Refactoring:** Probably the best decision I made was restructuring everything to MVC in Week 4. At the time it felt like a lot of rework, but it made Week 5 testing so much easier. When something broke, I could immediately tell if it was a data issue (model), display issue (view), or logic problem (controller). That separation of concerns is one of those things you read about but don't fully appreciate until you've actually done it.

**Weekly Milestones:** Breaking the project into five distinct weeks with clear deliverables helped keep things moving forward without feeling overwhelming. Each week built naturally on the previous one—database setup, then integration, then architecture, then testing. It prevented that "where do I even start" paralysis that big projects can trigger.

**Database Design:** The products table I designed in Week 2 held up really well. I included fields like `quantity_in_stock` and `category` even though they weren't immediately needed, and that foresight paid off when I added stock validation later. Didn't have to touch the schema after Week 2, which was nice.

**Git and Version Control:** Using GitHub from day one with meaningful commits and those Phase tags made it easy to look back and see what changed when. The tags acted like snapshots I could reference if something broke, which happened a couple times.

**Visual Consistency:** Sticking with the purple/mauve theme throughout kept things looking cohesive. Adding custom SVG images for each product in Week 5 gave it a more polished look than I was expecting—definitely elevated the final presentation.

**PHP Sessions:** Once I got sessions working correctly in Week 3, they just worked. No weird bugs, no unexpected behavior, which was a relief given how critical they are for cart functionality.

---

## What Went Poorly During Your Project?

Nothing went terribly wrong, but there were a few speed bumps along the way:

**The MVC Refactoring:** While I'm glad I did it, starting with procedural code in Weeks 2-3 and then refactoring to MVC in Week 4 meant I essentially wrote some of the same code twice. If I'd known from the start that MVC was the end goal, I could have saved myself that duplicate effort. But honestly, building it procedurally first probably helped me understand *why* MVC is useful, so maybe it wasn't entirely wasted time.

**Product Images:** I spent way too much time in Week 2 trying to get actual product images to work before just using SVG placeholders. Should've started with the placeholders and treated real images as a "nice to have" for later. Would've saved some frustration with broken image links.

**Error Handling:** My initial database connection code didn't handle errors gracefully. Found that out the hard way when MySQL stopped running during testing and the whole app crashed with an ugly error message. Had to go back and add proper try-catch blocks, which I should've done from the beginning.

---

## Was Your Project Plan Helpful?

Yeah, definitely. The plan kept me on track and gave me clear weekly goals, which prevented scope creep and kept me from wandering off into tangents. Knowing what needed to be done each week made it easier to just sit down and work.

That said, some of the tasks were pretty high-level. "Implement cart functionality" sounds like one thing, but it's really a dozen smaller tasks—session setup, add function, remove function, update function, UI, calculations, testing. Breaking those out more would've made time estimates more accurate and given me better visibility into actual progress.

Overall, the plan worked best as a big-picture roadmap—here's where we're going, here's the route. It was less helpful for day-to-day task management where more granular subtasks would've been nice. But the weekly milestone structure was solid and kept things moving.

---

## How Much Could You Stick to Your Project Plan Versus Making Adjustments?

Pretty well, actually—maybe 80% adherence to the original scope. All the core features got delivered on time, and the weekly structure stayed intact. But there were definitely adjustments along the way.

**What stayed on track:**
- Hit all five weekly milestones on schedule
- Delivered all planned features (catalog, cart, database, MVC)
- Followed the Phase tagging plan
- Core functionality matched what I originally laid out

**Where I deviated:**

I added more CSS styling in Week 2 than the plan called for. The plan said "basic framework" but I invested extra time making it look professional, figuring that visual polish matters when you're presenting work. Wasn't strictly necessary but felt worth it.

Week 3's time allocation was off—database connection took way less time than expected, but shopping cart took way more. The weekly deadline still worked out, but the internal pacing was different than planned.

Week 4's "apply MVC framework" sounded like one task but turned into creating new folders, splitting files into three layers, refactoring all existing code, and fixing all the paths. Took most of the week. The plan underestimated how much work architectural changes actually are.

Week 5 I added those custom SVG images, which wasn't explicitly planned but felt like a good finishing touch. Also discovered the mobile responsiveness issue during testing, which went into the documentation as a known limitation.

The adjustments were mostly about *how* things got built rather than *what* got built. The plan was solid on deliverables but left room for interpretation on implementation, which turned out to be fine.

---

## How Much Additional Work Did You Find During Project Execution?

More than I expected, but nothing catastrophic. Probably 30-40% more time than my initial estimates, which seems to be pretty typical for software projects based on what I've heard.

**Debugging took longer than planned:** Things like session persistence issues, database connection errors after the MVC refactoring, tax calculation edge cases, form validation—none of that was accounted for in the original plan, which kind of assumed code would work on the first try. Spoiler: it doesn't.

**Testing was more involved than expected:** The plan had "test functionality" as line items, but comprehensive testing—writing test cases, cross-browser checks, mobile testing, security testing—took more time than a single line item suggested.

**Documentation added up:** Writing the README, test documentation, and this retrospective all took longer than anticipated. The plan included "create documentation" but didn't really capture how much detail goes into professional documentation.

**Polish and UX improvements:** Creating custom SVGs, refining CSS, improving error messages, adding the cart badge—these weren't explicitly planned but emerged as important when comparing the app to actual e-commerce sites.

Lesson learned: next time I'll pad estimates with explicit buffers for debugging and testing. A feature that takes 2 hours to write probably takes 3-4 hours total when you include testing and debugging.

---

## What Would You Do Differently If Starting Over From the Beginning?

**Start with MVC from day one.** Knowing what I know now, I'd structure the project with model/view/controller folders from the very first line of code in Week 2. The overhead of following MVC early on would be way less than the time spent refactoring later.

**Plan for mobile responsiveness upfront.** I designed for desktop and discovered mobile issues in Week 5 testing, which was too late to properly fix. Next time: design mobile-first or at least test on mobile throughout development, not just at the end.

**Break tasks down more granularly.** Instead of "implement shopping cart," I'd list out "initialize session (30 min), add to cart function (1 hr), remove function (45 min), update function (1 hr), UI (2 hrs), calculations (1 hr), testing (1.5 hrs)." More detail means better estimates and less overwhelm.

**Document as I go.** Saving all documentation for Week 5 created unnecessary time pressure. Writing README sections as features are completed, documenting tests as they're performed, keeping notes for retrospective throughout—all of that would've spread the work out and probably resulted in better documentation too.

**Add explicit buffers to the schedule.** For every hour of development, plan an extra 20-30 minutes for debugging and testing. Realistic timelines beat optimistic ones.

**Use SVG placeholders immediately.** Don't waste time trying to find or create perfect product images in Week 2. Start with simple placeholders and revisit images during polish phase if there's time.

Those are the big ones. Honestly though, the project went pretty well overall. These are more "nice to haves" for next time than critical mistakes. I'm happy with what I built and learned a ton in the process.

---

## Final Thoughts

This project successfully delivered a working e-commerce application with all the required features, and I'm genuinely proud of the final product. The development process taught me as much as the technical implementation—things like the value of proper architecture, the importance of realistic time estimates, and how documentation and testing are just as important as writing code.

If I had to sum it up: **invest time upfront in planning and architecture, because it pays off throughout the entire project.** The MVC refactoring was uncomfortable in Week 4 but made Week 5 so much smoother. Git discipline saved me when bugs appeared. Incremental milestones kept me from getting overwhelmed.

The final application works well, looks professional, and demonstrates everything the course was teaching. More importantly, the lessons learned here—proper architecture, version control, comprehensive testing, realistic planning—apply to any development project regardless of the technology.

**Project Status:** Complete and ready for review  
**Personal Assessment:** Happy with the outcome, valuable learning experience  
**Would I do it again?** Absolutely, with these lessons applied from the start - it was fun!

---

**Author:** Haley Archer  
**Completed:** January 25, 2026
