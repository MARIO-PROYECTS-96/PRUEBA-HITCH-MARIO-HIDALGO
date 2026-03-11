import React from "react";
import { View, Text } from "react-native";
import { experience } from "../data/portfolio";

export default function Experience() {
  return (
    <View id="experience" className="py-28 bg-slate-50 px-6 relative overflow-hidden">
      <View className="absolute top-0 right-0 w-48 h-48 dots-pattern opacity-15" />
      <View className="absolute bottom-10 left-10 w-40 h-40 rounded-full bg-emerald-50/30 glow-orb" />

      <View className="max-w-3xl mx-auto">
        <View className="items-center mb-16">
          <View className="bg-white rounded-full px-4 py-1.5 mb-4 border border-slate-200">
            <Text className="text-xs font-semibold text-slate-500 tracking-widest uppercase">
              Experiencia
            </Text>
          </View>
          <Text className="text-4xl md:text-5xl font-extrabold text-slate-900 text-center tracking-tight mb-3">
            Mi trayectoria
          </Text>
          <Text className="text-base text-slate-400 text-center max-w-md">
            Los lugares donde he crecido profesionalmente
          </Text>
        </View>

        <View>
          {experience.map((exp, index) => (
            <View key={exp.company} className="flex-row gap-8">
              {/* Timeline column */}
              <View className="items-center w-6">
                <View className="timeline-dot w-4 h-4 rounded-full bg-slate-800 border-4 border-slate-200 mt-6 z-10" />
                {index < experience.length - 1 && (
                  <View className="w-0.5 flex-1 timeline-line" />
                )}
              </View>

              {/* Content card */}
              <View className="flex-1 pb-10">
                <View className="card-glow bg-white rounded-2xl p-7 border border-slate-200 shadow-sm">
                  <View className="flex-row items-center gap-3 mb-4">
                    <View className="bg-slate-900 rounded-lg px-3.5 py-1.5">
                      <Text className="text-xs font-bold text-white font-mono">
                        {exp.period}
                      </Text>
                    </View>
                  </View>

                  <Text className="text-xl font-extrabold text-slate-900 mb-1 tracking-tight">
                    {exp.role}
                  </Text>
                  <Text className="text-sm font-semibold text-slate-500 mb-4">
                    {exp.company}
                  </Text>

                  <View className="h-px bg-slate-100 mb-4" />

                  <Text className="text-sm text-slate-500 leading-6 mb-4">
                    {exp.description}
                  </Text>

                  {/* Tags */}
                  <View className="flex-row flex-wrap gap-2">
                    {exp.tags.map((tag) => (
                      <View key={tag} className="bg-slate-50 px-3 py-1 rounded-lg border border-slate-100">
                        <Text className="text-xs text-slate-500 font-semibold">
                          {tag}
                        </Text>
                      </View>
                    ))}
                  </View>
                </View>
              </View>
            </View>
          ))}
        </View>
      </View>
    </View>
  );
}
